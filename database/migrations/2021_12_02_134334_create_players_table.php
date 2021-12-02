<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->string('gender')->default(\App\Enums\Gender::NR);
            $table->string('throwing_hand')->nullable();
            $table->string('bating_position')->nullable();
            $table->integer('size')->nullable();
            $table->integer('weight')->nullable();
            $table->date('born_at')->nullable();
            $table->string('place_of_born')->nullable();
            $table->string('arriving_year')->nullable();
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
        Schema::dropIfExists('players');
    }
}
