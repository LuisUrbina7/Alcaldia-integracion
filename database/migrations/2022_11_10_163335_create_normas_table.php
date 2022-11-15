<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100);
            $table->string('enlace',60);
            $table->date('fecha');
            $table->char('tipo',20);
            $table->foreignId('idUsuario')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('normas');
    }
}
