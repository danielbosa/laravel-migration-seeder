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
        Schema::create('treni_trenord', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255);
            $table->string('departure', 255);
            $table->string('destination', 255);
            $table->date('departure_date'); 
            $table->time('departure_time');
            $table->date('arrival_date');
            $table->date('arrival_time');
            $table->string('train_id',20);
            $table->integer('carriage_count');
            $table->boolean('on_time');
            $table->boolean('confirmed');
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
        Schema::dropIfExists('treni_trenord');
    }
};
