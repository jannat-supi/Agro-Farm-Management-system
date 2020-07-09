<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedByExpenditureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenditure', function (Blueprint $table) {
            $table->unsignedBigInteger('updated_by');
			$table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenditure', function (Blueprint $table) {
            $table->unsignedBigInteger('updated_by');
			$table->foreign('user_id')->references('user_id')->on('user');
        });
    }
}
