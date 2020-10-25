<?php namespace App\Models;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model{

    use \TraitsFunc;

    protected $table = 'shops';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Address(){
        return $this->belongsTo('App\Models\Address','address_id');
    }

    public function Phone(){
        return $this->belongsTo('App\Models\Phone','phone_id');
    }

    public function Category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

    static function usersList() {
        $input = \Request::all();

        $source = self::NotDeleted()->orderBy('id', 'desc');

        if (isset($input['name']) && !empty($input['name'])) {
            $source->where('name', 'LIKE', '%' . $input['name'] . '%');
        }
        if (isset($input['category_id']) && $input['category_id'] != 0) {
            $source->where('category_id', $input['category_id']);
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

        $data['pagination'] = \Helper::GeneratePagination($sourceArr);
        $data['data'] = $list;

        return $data;
    }

    static function getData($source) {
        $data = new  \stdClass();
        $data->id = $source->id;
        $data->name = $source->name;
        $data->category = $source->Category != null ? $source->Category->title : '-----';
        $data->category_id = $source->category_id;
        $data->phone = $source->Phone != null ? $source->Phone->number: '';
        $data->address = $source->Address != null ? $source->Address->text: '';
        $data->addressObj = $source->address_id != 0 ?  Address::getObj($source->address_id): '';
        return $data;
    }

    static function getOne($id) {
        return self::NotDeleted()
            ->where('id', $id)
            ->first();
    }

    static function getOneD($id) {
        return self::where('id', $id)
            ->first();
    }

    static function checkByPhone($phone, $notId = false){
        $dataObj = self::NotDeleted()
            ->whereHas('Phone', function($profileQuery) use($phone) {
                $profileQuery->where('number',$phone);
            });

        if ($notId != false) {
            $notId = (array) $notId;
            $dataObj->whereNotIn('id', $notId);
        }

        return $dataObj->first();
    }

}
