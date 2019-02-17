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

}
