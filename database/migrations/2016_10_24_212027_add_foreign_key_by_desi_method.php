<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyByDesiMethod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('questions', function(Blueprint $table){
    $sql = "ALTER TABLE myDB.questions ADD FOREIGN KEY (category_id) REFERENCES categories(id)"; 
    DB::connection()->getPdo()->exec($sql);
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
