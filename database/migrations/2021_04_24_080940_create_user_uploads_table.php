<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_detail_id')->constrained('user_details');
            $table->string('photo_passport');
            $table->string('photo_formal');
            $table->string('photo_cover_passport');
            $table->string('sponsor_letter_sign_id');
            $table->string('letter_accept');
            $table->string('financial');
            $table->string('medical');
            $table->string('academic_transkip');
            $table->string('last_certificate');
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
        Schema::dropIfExists('user_uploads');
    }
}
