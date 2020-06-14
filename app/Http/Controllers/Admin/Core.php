<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\User;
use App\Role;
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

		$user = User::find(6);

		$articles = Article::all();
		foreach ($articles as $article) {
			$article->user()->associate($user);
			$article->save();
		}

		// $country = Country::find(1);

		// $country->user()->associate($user);
		// $country->save();

		// $user->articles()->create(
		// 	[
		// 	'name' => 'New article',
		// 	'text' => 'Article text'
		// 	]
		// );

		// $article = new Article([
		// 	'name' => 'Article for user',
		// 	'text' => 'Article for user text',
		// ]);

		// $user->articles()->save($article);

		// $user->articles()->saveMany([
		// 	new Article(['name' => 'article many', 'text' => 'article many text']),
		// 	new Article(['name' => 'article many 2', 'text' => 'article many text 2']),
		// ]);

		// $articles = Article::all();
		// dump($articles);

		// $role = new Role(['name' => 'quest']);
		// $user->roles()->save($role);

		// $users = User::has('articles')->get();	
		// dump($users);

		// foreach ($users as $user) {
		// 	// dump($user->roles);
		// 	dump($user->articles);
		// }

		// $articles = Article::all();
		// $articles = Article::with('user')->get();

		// $articles->load('user');

		// foreach ($articles as $article) {
		// 	echo $article->user->name.'<br>';
		// }

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

		// $user->articles()->where('id', 20)->update(['name' => 'NEW TEXT']);

		// $article = Article::find(20);
		// dump($article->name);
	}
}
