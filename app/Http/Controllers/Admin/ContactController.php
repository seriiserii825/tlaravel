<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller {
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function show() {
		$this->request->flash();

		return view( 'default.contacts', [ 'title' => 'Contacts' ] );
	}
}
