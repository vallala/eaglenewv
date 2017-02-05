<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('description');
            $table->integer('acquired_value');
            $table->date('acquired_date');
            $table->string('asset_type');
			$table->integer('salvage_value');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('assets', function (Blueprint $table) {
           $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    
    }
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('assets');
    }
}
