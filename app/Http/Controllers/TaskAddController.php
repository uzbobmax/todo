<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ListTo;

class TaskAddController extends Controller {
	
	public function index()
	{
		return view('listdata', ['data' => ListTo::all()]);
	}

	public function insert(Request $request)
	{
		$list = new ListTo();
		$list->name = $request->input('insert_data');

		$list->save();

		return redirect('listdata');
	}

	public function allData() 
	{
		return view('listdata', ['data' => ListTo::all()]);
	}

}