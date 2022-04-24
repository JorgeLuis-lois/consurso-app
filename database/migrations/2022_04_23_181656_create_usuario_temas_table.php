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
        Schema::create('usuario_temas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idusuario')
                    ->constrained()->on('usuarios')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('idtema')
                    ->constrained()->on('temas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('usuario_temas');
    }
};
