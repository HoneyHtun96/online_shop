<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
    	'voucherno','orerdate','status','note','total','phone','address','user_id'];

    public function items($value=''){
    	return $this->belongsToMany('App\Item','order_detail')
    			->withPivot('qty')
    			->withTimestamps();	
    }

    public function user($value=''){
    	return $this->belongsTo('App\User');
    }
    
}
