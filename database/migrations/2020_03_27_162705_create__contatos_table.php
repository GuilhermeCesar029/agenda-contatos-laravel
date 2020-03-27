<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_contatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 70);
            $table->string('sobrenome', 70);
            $table->char('telefone', 15);
            $table->string('email', 200);
            $table->date('data_nascimento')->nullable();
            $table->string('descricao', 100);
            $table->string('avatar', 200)->nullable();
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
        Schema::dropIfExists('_contatos');
    }
}
