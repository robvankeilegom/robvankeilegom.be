<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddHighlightColumnToProjects extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('projects', function ($table) {
            $table->text('highlight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            if (Schema::hasColumn('users', 'highlight')) {
                $table->dropColumn('highlight');
            }
        });
    }
}
