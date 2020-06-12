<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{
	public function getArticle($id){

	}
	public function getArticles() {
		// $articles = DB::table('articles')->get();
		// $articles = DB::table('articles')->first();
		// $articles = DB::table('articles')->pluck('name');
		// $articles = DB::table('articles')->max('id');
		// $articles = DB::table('articles')->select('id', 'name', 'text')->get();
		// $articles = DB::table('articles')->distinct()->select('id', 'name', 'text')->get();
		$articles = DB::table('articles')->distinct()->select('id', 'name', 'text')->where('id', '=', 2)->get();

		echo '<pre>';
		var_dump($articles);
		echo '</pre>';
	}
}
