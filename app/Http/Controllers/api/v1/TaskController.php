<?php

namespace App\Http\Controllers\api\v1;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Product;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
	public function index() {
		//todo
		//获取所有 task

		$tasks = Task::with( 'customer')-> get();
		return response()->json($tasks);
	}

	public function create(  ) {
		
	}

	public function store(Request $request) {
//		return 'aaaa';
		//???????
		//todo
//		return $request->get( 'name');
//		return response()->json($request->all());
//		return $request->data;

		$product_id = $request->get('product_id');
		$product = Product::find($product_id);

		$customer = Customer::create([
			'name' => $request->get( 'name'),
			"phone" => $request->get( 'phone'),
			"email" => $request->get( 'email'),
			"pin_code" => $request->get( 'pin_code'),
			"level" => 0,
		]);
//		return $customer;

		$task = Task::create([
			'customer_id'=>$customer->id,
			'issue'=>$request->get( 'issue'),
			'desc'=>$request->get( 'desc'),
			'product_id'=>$product->id,
			'price'=>$product->price,
			"status" => $request->get( 'status'),
			"comment" => $request->get( 'comment') || 'no comment',
		]);
		if($product && $customer && $task){
			return $data = [
				'msg' =>'task created~!',
				'status' => 0
			];
		}
	}
}
