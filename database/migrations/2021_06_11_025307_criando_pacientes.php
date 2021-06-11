<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoPacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Sobrenome');
            $table->string('CPF');
            $table->string('RG');
            $table->date('Data de nascimento');
            $table->string('Sexo');
            $table->string('Email');
            $table->string('Senha');
            $table->string('Telefone');
            $table->string('Endereço');
            $table->string('Logradouro');
            $table->string('Complemento');
            $table->string('Número');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('UF');
            $table->string('CEP');
            $table->string('Estado civil');
            $table->string('Naturalidade');
            $table->string('Nacionalidade');
            $table->string('Nome da mãe');
            $table->string('Nº cartão do SUS');
            $table->double('Altura');
            $table->double('Peso');
            $table->string('Cor');
            $table->integer('Idade');
            $table->string('Profissão');
            $table->string('Escolaridade');
            $table->string('País');
            $table->date('Data do cadastro');
            $table->string('Tipo sanguíneo');
            $table->string('Fator Rh');
            $table->string('Sintomas do paciente');
            $table->string('Comorbidades do paciente');
            $table->string('Vacinas tomadas pelo paciente');
            $table->string('Exames do paciente');
            $table->string('Consultas do paciente');
            $table->string('Prontuário do paciente');
            $table->string('IMC do paciente');
            $table->string('Diagnóstico do paciente');
            $table->string('Duração dos sintomas');
            $table->string('Alergias do paciente');
            $table->string('O paciente fuma?');
            $table->string('Idade que iniciou fumar');
            $table->string('Frequencia que fuma');
            $table->string('Queixas do paciente');
            $table->string('É alcoolatra?');
            $table->string('Tem insônia?');
            $table->string('Tem depressão?');
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
        Schema::dropIfExists('pacientes');
    }
}
