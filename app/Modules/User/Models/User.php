<?php namespace App\Models;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class User extends Model{

    use \TraitsFunc;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = ['is_active'];

    function Profile(){
        return $this->hasOne('App\Models\Profile', 'user_id');
    }

    static function getPhotoPath($id, $photo) {
        return \ImagesHelper::GetImagePath('users', $id, $photo);
    }

    static function usersList() {
        $input = \Request::all();

        $source = self::NotDeleted()->orderBy('id', 'desc')->with('Profile')
            ->whereHas('Profile', function($queryProfile) use ($input) {
                if (isset($input['name']) && !empty($input['name'])) {
                    $queryProfile->where('first_name', 'LIKE', '%' . $input['name'] . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $input['name'] . '%');
                }
                if (isset($input['group_id']) && $input['group_id'] != 0) {
                    $queryProfile->where('group_id', $input['group_id']);
                }
                if (isset($input['phone']) && $input['phone'] != 0) {
                    $queryProfile->where('phone', $input['phone']);
                }
            });

        if (isset($input['email']) && !empty($input['email'])) {
            $source->where('email', 'LIKE', '%' . $input['email'] . '%');
        }

        return self::generateObj($source);
    }

    static function generateObj($source){
        $sourceArr = $source->paginate(PAGINATION);

        $list = [];
        foreach($sourceArr as $key => $value) {
            $list[$key] = new \stdClass();
            $list[$key] = self::getData($value);
        }

        $data['groups'] = Group::groupsList();
        $data['pagination'] = \Helper::GeneratePagination($sourceArr);
        $data['data'] = $list;

        return $data;
    }

    static function selectImage($source){
        
        if($source->Profile->image != null){
            return self::getPhotoPath($source->id, $source->Profile->image);
        }else{
            if($source->facebook_img != null){
                return $source->facebook_img;
            }

            if($source->google_img != null){
                return $source->google_img;
            }

            if($source->google_img==null && $source->facebook_img ==null){
                return '';
            }
        }
    }

    static function getNameAbrev($name){
        $names = explode(' ', $name, 2);
        return ucfirst($names[0][0]). (isset($names[1]) ? ucfirst($names[1][0]) : '' );
    }

    static function getData($source) {
        $data = new  \stdClass();
        $data->id = $source->id;
        $data->name = $source->Profile != null ? ucwords($source->Profile->display_name) : '';
        $data->first_name = $source->Profile != null ? $source->Profile->first_name : '';
        $data->last_name = $source->Profile != null ? $source->Profile->last_name : '';
        $data->image = self::selectImage($source);
        $data->group = $source->Profile->Group != null ? $source->Profile->Group->title : '';
        $data->gender = $source->Profile != null ? $source->Profile->gender : '';
        $data->group_id = $source->Profile->group_id;
        $data->nameAbrev = self::getNameAbrev($source->name) != '' ? self::getNameAbrev($source->name) : '';
        $data->phone = $source->Profile->Phone != null ? $source->Profile->Phone->number: '';
        $data->address = $source->Profile->Address != null ? $source->Profile->Address->text: '';
        $data->birth_date = $source->Profile != null ? date('m/d/Y',strtotime($source->Profile->birth_date)): '';
        $data->email = $source->email;
        $data->last_login = \Helper::formatDateForDisplay($source->last_login, true);
        $data->extra_rules = unserialize($source->Profile->extra_rules) != null || unserialize($source->Profile->extra_rules) != '' ? unserialize($source->Profile->extra_rules) : [];
        $data->active = $source->is_active == 1 ? "Yes" : "No";
        $data->addressObj = $source->Profile->address_id != 0 ?  Address::getObj($source->Profile->address_id): '';
        $data->status = $source->is_active;
        $data->deleted_by = $source->deleted_by;
        return $data;
    }

    static function getOne($id) {
        return self::NotDeleted()
            ->with('Profile')
            ->where('id', $id)
            ->first();
    }

    static function getOneD($id) {
        return self::with('Profile')
            ->where('id', $id)
            ->first();
    }

    static function getLoginUser($email){
        $userObj = self::NotDeleted()
            ->with('Profile')
            ->where('email', $email)
            ->where('is_active', 1)
            ->first();

        if($userObj == null ) { //  || $userObj->Profile->group_id != 1
            return false;
        }

        return $userObj;
    }

    static function checkUserPermissions($userObj) {
        $endPermissionUser = [];
        $endPermissionGroup = [];

        $groupObj = $userObj->Profile->Group;
        $profileObj = $userObj->Profile;
        $groupPermissions = $groupObj != null ? $groupObj->permissions : null;

        $userPermissionValue = unserialize($profileObj->extra_rules);
        $groupPermissionValue = unserialize($groupPermissions);

        if($userPermissionValue != false){
            $endPermissionUser = $userPermissionValue;
        }

        if($groupPermissionValue != false){
            $endPermissionGroup = $groupPermissionValue;
        }

        $permissions = (array) array_unique(array_merge($endPermissionUser, $endPermissionGroup));

        return $permissions;
    }

    static function userPermission(array $rule){

        if(USER_ID && IS_ADMIN == false) {
            return count(array_intersect($rule, PERMISSIONS)) > 0;
        }

        return true;
    }

    static function checkUserByEmail($email, $notId = false){
        $dataObj = self::NotDeleted()
            ->where('email', $email);

        if ($notId != false) {
            $dataObj->whereNotIn('id', [$notId]);
        }

        return $dataObj->first();
    }

    static function checkUserByPhone($phone, $notId = false){
        $dataObj = self::NotDeleted()
            ->whereHas('Profile.Phone', function($profileQuery) use($phone) {
                $profileQuery->where('number',$phone);
            });

        if ($notId != false) {
            $notId = (array) $notId;
            $dataObj->whereNotIn('id', $notId);
        }

        return $dataObj->first();
    }

    static function createOneUser($input){
        $userObj = new User();
        $userObj->email = $input['email'];
        $userObj->name = $input['name'];
        $userObj->is_active = 1;
        $userObj->password = \Hash::make($input['password']);
        $userObj->save();

        self::saveProfile($input,$userObj);
        return $userObj->id;
    }

    static function saveProfile($input,$userObj) {
        $profileObj = $userObj->Profile;

        if($profileObj == null){
            $profileObj = new Profile();
        }
        if(isset($input['extra_rules'])){
            $profileObj->extra_rules = serialize($input['extra_rules']);
        }
        $profileObj->user_id = $userObj->id;
        $profileObj->first_name = $input['first_name'];
        $profileObj->last_name = $input['last_name'];
        $profileObj->phone_id = $input['phone_id'];
        $profileObj->address_id = $input['address_id'] ;
        $profileObj->birth_date = date('Y-m-d',strtotime($input['birth_date'])) ;
        $profileObj->gender = $input['gender'];
        $profileObj->display_name = $input['name'];
        $profileObj->group_id = $input['user_type'];
        $profileObj->save();
    }

}
