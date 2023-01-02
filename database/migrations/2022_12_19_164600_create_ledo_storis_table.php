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
        Schema::create('ledo_storis', function (Blueprint $table) {
            $table->id();
            $table->float('coord_x');
            $table->float('coord_y');
            $table->integer('storis-(cm)');
            $table->string('komentaras');
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
        Schema::dropIfExists('ledo_storis');
    }
};
