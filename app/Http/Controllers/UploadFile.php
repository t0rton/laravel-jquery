<?php namespace App\Http\Controllers;

use Validator;
use Input;
use Response;

class UploadFile extends Controller
{
	public function view()
	{
		return view('upload');
	}

	public function save()
	{
		$validator = Validator::make(
			array(
				'first' => Input::get('first'),
				'last'  => Input::get('last'),
			),
			array(
				'first' => 'required|undefined',
				'last'  => 'required|undefined'
			)
		);

		if($validator->fails()) {
			return Response::json([
				'success' => false, 
				'errors'   => $validator->errors() 
				]);
		}

		return Response::json(['success' => true, 'result' => 'good job']);
	}
}