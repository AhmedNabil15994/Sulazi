<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $timestamps = false;
    protected $table = 'phones';
    
    static function storeMobile($mobile){
    	$numberObj = self::where('number',$mobile)->first();

    	if($numberObj != null){
    		return $numberObj->id;
    	}else{
    		$numberObj = new self;
    		$numberObj->number = $mobile;
    		$numberObj->save();
    		return $numberObj->id;
    	}
    }

    static function editPhone($phone,$id){
        $numberObj = self::where('number',$phone)->first();

        if($numberObj != null){
            return $numberObj->id;
        }else{
            $numberObj = self::find($id);
            $numberObj->number = $phone;
            $numberObj->save();
            return $numberObj->id;
        }
    }
}
