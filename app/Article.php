<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'articles';
	protected $primaryKey = 'id';
	protected $fillable = ['name', 'text']; 

	public function user(){
		return $this->belongsTo('App\User');
	}

}
