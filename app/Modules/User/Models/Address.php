<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;
    protected $table = 'addresses';

    static function checkAddressByLatLng($source,$type=1){
        $place_id = '';
        
        $addressObj = self::where('type',$type)->where('lat',$source->latlng[0])->where('lng',$source->latlng[1])->first();
        if($addressObj != null){
            $place_id = $addressObj->id;
        }else{
            $place_id = Address::storeOrderAdd($source);
        }

        return $place_id;
    }

    static function storeOrderAdd($address){

        $addressObj = new Address();
        $addressObj->street = $address->street;
        $addressObj->city = $address->city;
        $addressObj->home = $address->home;
        $addressObj->postal_code = $address->postal_code;
        $addressObj->lat = $address->latlng[0];
        $addressObj->lng = $address->latlng[1];
        $addressObj->country = $address->country;
        $addressObj->text = $address->street.' '.$address->home.'<br>'.$address->postal_code.' '.$address->city.'<br>'.$address->country;
        $addressObj->type = $address->type;
        $addressObj->save();

        return $addressObj->id;
    }

    static function getObj($address_id){
        $source = self::find($address_id);
        $dataObj = new \stdClass();
        $dataObj->street = $source->street;
        $dataObj->home = $source->home;
        $dataObj->country = $source->country;
        $dataObj->city = $source->city;
        $dataObj->postal_code = $source->postal_code;
        $dataObj->latlng = [$source->lat,$source->lng];
        return json_encode($dataObj);
    }

}
