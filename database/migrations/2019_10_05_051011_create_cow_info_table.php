<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCowInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cow_info', function (Blueprint $table) {
            $table->bigIncrements('c_id');
	    $table->string('cow_id');
	    $table->string('cow_type');
	    $table->string('cow_color');
	    $table->string('buying_price');
	    $table->date('buying_date');
	    $table->date('selling_date');
	    $table->string('cost');
	    $table->string('status');
	    $table->string('buying_place');
	    $table->string('selling_price');
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
        Schema::dropIfExists('cow_info');
    }
}
