<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksProjectsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('links_projects', function (Blueprint $table) {
            $table->integer('project_id')->unsigned();
            $table->integer('link_id')->unsigned();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('link_id')->references('id')->on('links');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('links_projects');
    }
}
