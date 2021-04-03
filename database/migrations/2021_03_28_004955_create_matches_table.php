<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stadium_id');
            $table->timestamps();
            $table->string('homeTeam');
            $table->string('awayTeam');
            $table->timestamp('date')->nullable();
            $table->string('referee');
            $table->string('linesman1');
            $table->string('linesman2');
            
            $table->index('stadium_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
