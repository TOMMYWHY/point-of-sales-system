<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
	protected $fillable=[
		'name','phone','email','pin_code','level',
		'comment'
	];

	public function tasks() {
		return $this->hasMany( Task::class);
	}

	//todo task 表为 customer 与 product 之间的 中间表

	/*public function products() {
		return $this->hasManyThrough( Product::class, 'App\Task','customer_id','');
	}	*/

}
