<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseName');
            $table->string('slug');
            $table->string('thumbnail');
            $table->enum('typeDegree', ['degree', 'non']);
            $table->enum('typeCourse', ['diploma', 'bachelor', 'master', 'doctor']);
            $table->enum('typeDuration', ['short', 'long']);
            $table->text('information');
            $table->string('duration');
            $table->date('startPeriode');
            $table->date('endPeriode');
            $table->string('campuses');
            $table->string('keyDate');
            $table->string('deakinStudent');
            $table->integer('gradeAA');
            $table->integer('sksAA');
            $table->integer('bppAA');
            $table->integer('gradA');
            $table->integer('bppA');
            $table->integer('sksA');
            $table->integer('gradB');
            $table->integer('bppB');
            $table->integer('sksB');
            $table->enum('status', ['pending', 'publish'])->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
