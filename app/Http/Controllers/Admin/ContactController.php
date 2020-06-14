<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller {
	protected $request;

	public function show(Request $request) {
		// $request->flash();

		// $rules = [
		// 	'name' => 'required|max:10',
		// 	'email' => 'required|email',
		// 	'url' => 'required|active_url'
		// ];

		// if($request->isMethod('post')){
		// 	$this->validate($request, $rules);
		// }

		// if($request->isMethod('post')){
		// 	$messages = [];

			// $validator = Validator::make($request->all(), [
			// 	'name' => required
			// ], $messages);

			// if($validator->fails()){
			// 	redirect()->route('contacts')->withErrors($validator)->withInput();
			// }
		// }


		// dump($request->all());

		return view( 'default.contacts', [ 'title' => 'Contacts' ] );
	}
}
