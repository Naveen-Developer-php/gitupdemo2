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
        Schema::create('parish_statistis', function (Blueprint $table) {
            $table->id();
                $table->string('name');
                    $table->string('family');
                        $table->string('male');
                            $table->string('female');
                                $table->string('total_population');
                                    $table->string('substation');
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
        Schema::dropIfExists('parish_statistis');
    }
};
