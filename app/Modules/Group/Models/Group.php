<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model{

    use \TraitsFunc;

    protected $table = 'groups';
    protected $primaryKey = 'id';
    public $timestamps = false;

    static function getOne($id){
        return self::NotDeleted()
            ->where('id', $id)
            ->first();
    }

    static function groupsList() {
        $input = \Request::all();

        $source = self::NotDeleted()->where(function ($query) use ($input) {
                    if (isset($input['title']) && !empty($input['title'])) {
                        $query->where('title', 'LIKE', '%' . $input['title'] . '%');
                    } 
                });

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
        $data->title = $source->title;
        $data->permissions = $source->permissions != null ? unserialize($source->permissions) : '';
        $data->created_at = \Helper::formatDateForDisplay($source->created_at);
        return $data;
    }

}
