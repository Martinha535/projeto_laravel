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
            $table->date('Datadenascimento');
            $table->string('Sexo');
            $table->string('Email');
            $table->string('Senha');
            $table->string('Telefone');
            $table->string('Endereco');
            $table->string('Logradouro');
            $table->string('Complemento');
            $table->string('Numero');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('UF');
            $table->string('CEP');
            $table->string('EstadoCivil');
            $table->string('Naturalidade');
            $table->string('Nacionalidade');
            $table->string('NomeMae');
            $table->string('NumCartaoSUS');
            $table->double('Altura');
            $table->double('Peso');
            $table->string('Cor');
            $table->integer('Idade');
            $table->string('Profissao');
            $table->string('Escolaridade');
            $table->string('Pais');
            $table->date('DataCadastro');
            $table->string('TipoSanguineo');
            $table->string('FatorRh');
            $table->string('SintomasPaciente');
            $table->string('ComorbidadesPaciente');
            $table->string('VacinasTomadasPaciente');
            $table->string('ExamesPaciente');
            $table->string('ConsultasPaciente');
            $table->string('ProntuarioPaciente');
            $table->string('IMCPaciente');
            $table->string('DiagnosticoPaciente');
            $table->string('DuracaoSintomas');
            $table->string('AlergiasPaciente');
            $table->string('PacienteFuma?');
            $table->string('IdadeIniciouFumar');
            $table->string('FrequenciaFuma');
            $table->string('QueixasPaciente');
            $table->string('Alcoolatra?');
            $table->string('Insonia?');
            $table->string('Depressao?');
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
