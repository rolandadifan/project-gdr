<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserResidancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_residances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_detail_id')->constrained('user_details');
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('prov_id')->constrained('provinces');
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('postcode_id')->constrained('post_codes');
            $table->integer('current_city')->constrained('cities');
            $table->integer('current_prov')->constrained('provinces');
            $table->integer('current_country')->constrained('countries');
            $table->integer('current_postcode')->constrained('post_codes');
            $table->text('address');
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
        Schema::dropIfExists('user_residances');
    }
}
