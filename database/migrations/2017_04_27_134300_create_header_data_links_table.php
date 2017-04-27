<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderDataLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_data_links', function (Blueprint $table) {
            $table->integer('header_data_id')->unsigned();
            $table->integer('link_id')->unsigned();

            $table->foreign('header_data_id')->references('id')->on('header_data');
            $table->foreign('link_id')->references('id')->on('links');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('header_data_links');
    }
}
