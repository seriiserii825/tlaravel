<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
	public function show() {
		$articles = DB::select("SELECT * FROM `articles`");

		dump($articles);

//		DB::insert("INSERT INTO `articles` (`name`, `text`) VALUES (?, ?)", ['test1', 'text1']);

//		$result = DB::update("UPDATE `articles` SET `name` = 'TEST 2' WHERE `id` = ?", [9]);

		DB::delete("DELETE FROM `articles` WHERE `id` = ?", [10]);

		return view( 'default.about', [ 'title' => 'Hello world' ] );
	}
}
