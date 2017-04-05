<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrenomToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function($table) {
        
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel_mobile');
            $table->string('tel_fix');
            $table->string('civilite');
            $table->string('compte_banquaire');
            $table->string('ville');
            $table->string('wilaya'); 
            $table->string('organisation');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function($table) {
             
             $table->dropColumn('prenom');
            $table->dropColumn('adresse');
            $table->dropColumn('tel_mobile');
            $table->dropColumn('tel_fix');
            $table->dropColumn('civilite');
            $table->dropColumn('compte_banquaire');
            $table->dropColumn('ville');
            $table->dropColumn('wilaya'); 
            $table->dropColumn('organisation');
    });
    }
}
