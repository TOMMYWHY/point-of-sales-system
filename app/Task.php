<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
	protected $fillable=[
		'customer_id','issue','desc','product_id','price',
		'status','comment'
	];

	public function customer() {
		return $this->belongsTo( Customer::class);
	}
}
