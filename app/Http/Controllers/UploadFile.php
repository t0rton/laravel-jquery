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
				'name' => Input::get('name')
			),
			array(
				'name' => 'required|max:5|alpha'
			)
		);

		if($validator->fails()) {
			return Response::json([
				'success' => false, 
				'errors'   => $validator->errors() 
				]);
		}

		return Response::json(['success' => true, 'result' => Input::get('name')]);
	}
}