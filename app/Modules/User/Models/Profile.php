<?php namespace App\Models;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model{

    use \TraitsFunc;

    protected $table = 'profiles';
    protected $primaryKey = 'id';
    public $timestamps = false;

    function Group(){
        return $this->belongsTo('App\Models\Group', 'group_id');
    }

    public function Address(){
    	return $this->belongsTo('App\Models\Address','address_id');
    }

    public function Phone(){
    	return $this->belongsTo('App\Models\Phone','phone_id');
    }

}
