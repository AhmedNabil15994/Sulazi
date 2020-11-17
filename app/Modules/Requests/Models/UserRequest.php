<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model{

    use \TraitsFunc;

    protected $table = 'requests';
    protected $primaryKey = 'id';
    public $timestamps = false;

    static function getOne($id){
        return self::NotDeleted()
            ->where('id', $id)
            ->first();
    }

    static function findNewRequest($ip_address){
        return self::NotDeleted()
            ->where('ip_address', $ip_address)
            ->where('status',2)
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

    static function getImages($imagesURL,$id){
        $images = [];
        foreach ($imagesURL as $one) {
            $images[] = \ImagesHelper::GetImagePath('requests', $id, $one);
        }
        return $images;
    }

    static function getData($source) {
        $data = new  \stdClass();
        $data->id = $source->id;
        $data->step_1 = $source->step_1;
        $data->step_2 = $source->step_2;
        $data->step_3 = $source->step_3;
        $data->step_4 = $source->step_4;
        $data->step_5 = $source->step_5;
        $data->step_6 = $source->step_6;
        $data->questionnaire_id = $source->questionnaire_id;
        $data->ip_address = $source->ip_address;
        $data->status = $source->status;
        $data->paid = $source->paid;
        $data->images = unserialize($source->images);
        $data->main_images = self::getImages(unserialize($source->images),$source->id);
        $data->statusText = trans('main.status_'.$source->status);
        $data->paidText = trans('main.paid_'.$source->paid);
        $data->created_at = \Helper::formatDateForDisplay($source->created_at);
        return $data;
    }

}
