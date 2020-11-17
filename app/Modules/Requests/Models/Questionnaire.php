<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model{

    use \TraitsFunc;

    protected $table = 'questionnaires';
    protected $primaryKey = 'id';
    public $timestamps = false;

    static function getOne($id){
        return self::NotDeleted()
            ->where('id', $id)
            ->first();
    }

    static function dataList() {
        $input = \Request::all();

        $source = self::NotDeleted()->where(function ($query) use ($input) {
                    
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
        $data->f_name = $source->f_name;
        $data->l_name = $source->l_name;
        $data->email = $source->email;
        $data->address = $source->address;
        $data->family_info = $source->family_info;
        $data->goal_1 = $source->goal_1;
        $data->goal_2 = $source->goal_2;
        $data->goal_3 = $source->goal_3;
        $data->style_1 = unserialize($source->style_1);
        $data->style_2 = $source->style_2;
        $data->style_3 = $source->style_3;
        $data->style_4 = $source->style_4;
        $data->treatment = $source->treatment;
        $data->measurement = $source->measurement;
        $data->created_at = \Helper::formatDateForDisplay($source->created_at);
        return $data;
    }

}
