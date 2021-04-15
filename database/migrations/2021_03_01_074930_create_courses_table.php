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
            $table->string('thumbnail')->nullable();
            $table->enum('typeDegree', ['degree', 'non'])->nullable();
            $table->enum('typeCourse', ['diploma', 'bachelor', 'master', 'doctor'])->nullable();
            $table->enum('typeDuration', ['short', 'long'])->nullable();
            $table->text('information');
            $table->string('duration')->nullable();
            $table->date('startPeriode')->nullable();
            $table->date('endPeriode')->nullable();
            $table->string('campuses')->nullable();
            $table->string('keyDate')->nullable();
            $table->string('deakinStudent')->nullable();
            $table->integer('gradeAA')->nullable();
            $table->integer('sksAA')->nullable();
            $table->integer('bppAA')->nullable();
            $table->integer('gradA')->nullable();
            $table->integer('bppA')->nullable();
            $table->integer('sksA')->nullable();
            $table->integer('gradB')->nullable();
            $table->integer('bppB')->nullable();
            $table->integer('sksB')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
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
