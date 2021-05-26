<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreDocumentToUserUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_uploads', function (Blueprint $table) {
            $table->string('statment_letter')->after('photo_formal')->nullable();
            $table->string('sponsor_letter')->after('statment_letter')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_uploads', function (Blueprint $table) {
            //
        });
    }
}
