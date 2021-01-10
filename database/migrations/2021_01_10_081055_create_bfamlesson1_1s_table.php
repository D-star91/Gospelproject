<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBfamlesson11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bfamlesson1_1s', function (Blueprint $table) {
            $table->id();
            $table->string('answer1');
            $table->longText('answer2');
            $table->longText('answer3');
            $table->longText('answer4');
            $table->longText('answer5');
            $table->longText('answer6');
            $table->longText('answer7');
            $table->longText('answer8');
            $table->longText('answer9');
            $table->longText('answer10');
            $table->longText('answer11');
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
        Schema::dropIfExists('bfamlesson1_1s');
    }
}
