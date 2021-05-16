<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->string('name')->nullable()->after('course_id');
            $table->string('predicate')->nullable()->after('name');
            $table->string('thumbnail')->nullable()->after('predicate');
            $table->string('is_top')->nullable()->after('thumbnail');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alumnis', function (Blueprint $table) {
            //
        });
    }
}
