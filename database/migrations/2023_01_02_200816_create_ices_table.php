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
        Schema::create('ices', function (Blueprint $table) {
                $table->id();
                $table->float('coord_x', 8,6);
                $table->float('coord_y',8,6);
                $table->integer('storis (cm)');
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
        Schema::dropIfExists('ices');
    }
};
