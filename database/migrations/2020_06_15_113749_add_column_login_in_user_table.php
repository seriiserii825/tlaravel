<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLoginInUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table( 'users', function ( $table ) {
		    $table->string( 'login', 255 )->after('name');
	    } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table( 'users', function ( $table ) {
		    $table->dropColumn( 'login');
	    } );
    }
}
