<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')
                ->references('id')
                ->on('personas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('usuario')->unique();
            $table->string('clave');
            $table->boolean('habilitado');
            $table->date('fecha');


            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->timestamp('fecha_creacion');
            // $table->timestamp('fecha_modificacion');
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
