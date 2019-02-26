<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('types', function ($table) {
        // $table->integer('brand_id')->unsigned()->after('name_en'); //the after method is optional.
        // $table->foreign('brand_id')->references('id')->on('brands');
        // $table->integer('category_id')->unsigned()->after('name_en'); //the after method is optional.
        // $table->foreign('category_id')->references('id')->on('categories');
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
