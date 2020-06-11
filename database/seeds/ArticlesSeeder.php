<?php
use App\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//1
		DB::insert('INSERT INTO `articles` (`name`, `text`, `image`) VALUES (?,?,?)', [
			'Blog post',
			'<p>Lorem text for content</p>',
			'pic1.jpg'
		]);

		//2
	    DB::table('articles')->insert([
	    	[
	    		'name' => 'sample blog',
			    'text' => '<p>sample blog text</p>',
			    'image' => 'pic2.jpg'
		    ],
		    [
			    'name' => 'sample blog 2',
			    'text' => '<p>sample blog text 2</p>',
			    'image'  => 'pic22.jpg'
		    ]
	    ]);

	    //3
	    Article::create([
		    'name' => 'sample blog model',
		    'text' => '<p>sample blog text model</p>',
		    'image'  => 'pic4.jpg'
	    ]);

    }
}
