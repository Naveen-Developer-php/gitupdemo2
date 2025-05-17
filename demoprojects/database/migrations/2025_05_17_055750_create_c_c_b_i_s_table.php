<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_c_b_i_s', function (Blueprint $table) {
            $table->id();
             $table->string('position');
            $table->string('tagline');
            $table->string('address', 500);
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('fax');
            $table->string('website');
            $table->string('image');
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
        Schema::dropIfExists('c_c_b_i_s');
    }
};
