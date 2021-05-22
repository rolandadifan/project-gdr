<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOpenStatusToKeyDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('key_dates', function (Blueprint $table) {
            $table->string('open_status', 10)->after('period')->nullable();
            $table->dropColumn('open_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('key_dates', function (Blueprint $table) {
            //
        });
    }
}
