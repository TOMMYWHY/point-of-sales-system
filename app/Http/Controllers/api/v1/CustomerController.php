<?php

namespace App\Http\Controllers\api\v1;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

	public function query( Request $request ) {
		$phone = $request->get( 'phone');

//		$customerInfo = Customer::where('phone','=',$phone)->first()->with('tasks')->get();
		$customerInfo = Customer::where('phone','=',$phone)->with('tasks')
//		                                                   where()
		                                                   ->first();
//		$posts = \App\Country::with(array('user','posts'))->find(1);

		if ($customerInfo){
			return response()->json($customerInfo);
		}else{
			return $data = [
				'msg' =>'can not find this customer~!',
				'status' => 0
			];
		}
	}
}
