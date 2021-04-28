<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderDataTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('header_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 4);
            $table->string('subtitle');
            $table->string('image');
            $table->text('description1');
            $table->text('description2');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('header_data');
    }
}
