<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 60);
            $table->string('email', 50);
            $table->string('tel_celular', 20);
            $table->date('data_nascimento');
            $table->string('endereco', 50);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf_estado', 2);
            $table->string('cep', 10);
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
        Schema::dropIfExists('usuarios');
    }
}
