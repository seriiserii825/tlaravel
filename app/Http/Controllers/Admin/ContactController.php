<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
	public function show(){
		return view('default.contacts', ['title' => 'Contacts']);
	}
}
