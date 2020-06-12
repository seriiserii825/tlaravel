<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{
	public function getArticle($id){

	}
	public function getArticles() {
//		$user = User::find(1);
//		$country = $user->country;

		$country = Country::find(1);

//		vardump($country);


		// $articles = DB::table('articles')->get();
		// $articles = DB::table('articles')->first();
		// $articles = DB::table('articles')->pluck('name');
		// $articles = DB::table('articles')->max('id');
		// $articles = DB::table('articles')->select('id', 'name', 'text')->get();
		// $articles = DB::table('articles')->distinct()->select('id', 'name', 'text')->get();
//		$article = new Article();
//		$article->name = 'Article title';
//		$article->text = 'Article text';
//		$article->save();

//		$articles = Article::all();
//		foreach ($articles as $article) {
//			echo $article->name.'<br>';
//		}

	}
}
