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
        Schema::create('santis', function (Blueprint $table) {
            $table->id();

            $table -> string('nome', 32);
            $table -> string('place_of_birth', 32);
            $table -> date('given_blessing');
            $table -> integer('miracles_number')->unsigned();

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
        Schema::dropIfExists('santis');
    }
};
