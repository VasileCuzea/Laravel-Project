<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbladdresses', function (Blueprint $table) {
            $table->increments ('id');
            $table->line_1();
            $table->line_2();
            $table->line_3();
            $table->county();
            $table->post_code();
            $table->country();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbladdresses');
    }
}
