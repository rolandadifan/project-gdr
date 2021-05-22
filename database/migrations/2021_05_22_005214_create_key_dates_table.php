<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id')->constrained('statuses');
            $table->string('period',200)->nullable();
            $table->date('open_date')->nullable();
            $table->date('close_date')->nullable();
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
        Schema::dropIfExists('key_dates');
    }
}
