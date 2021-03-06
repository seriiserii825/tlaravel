<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
	public function show() {
		$about = DB::select('select * from pages where id = ?', [1]);
		$about_title = $about[0]->name;
		$about_text = $about[0]->text;

		return view( 'default.about', [ 'title' => 'Hello world', 'about_title' => $about_title, 'about_text' => $about_text ] );
	}
}
