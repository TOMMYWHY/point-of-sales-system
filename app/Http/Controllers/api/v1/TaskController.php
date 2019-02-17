<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
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

	public function store($id) {

	}
}
