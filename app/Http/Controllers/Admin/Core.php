<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Student;
use App\Lesson;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{
	public function getArticle($id){

	}
	public function getArticles() {

		// $article = Article::find(11);

		// dump($article->user->email);

		// $student = Student::find(1);
		// $lesson = Lesson::find(2);
		// dump($lesson->student);
		
		// $user = User::find(1);

		// dump($user->roles);

		// $article = $user->articles()->where('id', 10)->first();
		// dump($article->name);

		// $articles = $user->articles;
		// foreach($articles as $article){
		// 	echo $article->name.'<br>';
		// }

		// $country = Country::find(1);
		// dump($country->user);
		// dump($country);
		// vardump($country);


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
