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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('users', 120);
            $table->char('password', 24);
            $table->char('cnpj', 14);
            $table->char('cpf', 11);
            $table->char('endereco', 50);
            $table->char('endereco_num', 4);
            $table->char('bairro', 50);
            $table->char('cidade', 50);
            $table->char('estado', 2);
            $table->char('cep', 8);
            $table->char('complemento', 50);
            $table->char('whatsapp', );
            $table->timestamps();
        });

        Schema::create('doacoes_info', function (Blueprint $table) {
            $table->char('descricao');
            $table->char('num_donatarios');
            $table->char('num_donatarios_instituicoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
