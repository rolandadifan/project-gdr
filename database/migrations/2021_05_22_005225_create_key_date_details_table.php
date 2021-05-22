<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyDateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_date_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('key_date_id')->constrained('key_dates')->onDelete('cascade');
            $table->string('activities', 200)->nullable();
            $table->string('date',200)->nullable();
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
        Schema::dropIfExists('key_date_details');
    }
}
