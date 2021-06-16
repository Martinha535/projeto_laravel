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
            $table->string('CPF')->nullable();
            $table->string('RG')->nullable();
            $table->date('Datadenascimento')->nullable();
            $table->string('Sexo')->nullable();
            $table->string('Email')->nullable();
            $table->string('Senha')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Endereco')->nullable();
            $table->string('Logradouro')->nullable();
            $table->string('Complemento')->nullable();
            $table->string('Numero')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('UF')->nullable();
            $table->string('CEP')->nullable();
            $table->string('EstadoCivil')->nullable();
            $table->string('Naturalidade')->nullable();
            $table->string('Nacionalidade')->nullable();
            $table->string('NomeMae')->nullable();
            $table->string('NumCartaoSUS')->nullable();
            $table->double('Altura')->nullable();
            $table->double('Peso')->nullable();
            $table->string('Cor')->nullable();
            $table->integer('Idade')->nullable();
            $table->string('Profissao')->nullable();
            $table->string('Escolaridade')->nullable();
            $table->string('Pais')->nullable();
            $table->date('DataCadastro')->nullable();
            $table->string('TipoSanguineo')->nullable();
            $table->string('FatorRh')->nullable();
            $table->string('SintomasPaciente')->nullable();
            $table->string('ComorbidadesPaciente')->nullable();
            $table->string('VacinasTomadasPaciente')->nullable();
            $table->string('ExamesPaciente')->nullable();
            $table->string('ConsultasPaciente')->nullable();
            $table->string('ProntuarioPaciente')->nullable();
            $table->string('IMCPaciente')->nullable();
            $table->string('DiagnosticoPaciente')->nullable();
            $table->string('DuracaoSintomas')->nullable();
            $table->string('AlergiasPaciente')->nullable();
            $table->string('PacienteFuma?')->nullable();
            $table->string('IdadeIniciouFumar')->nullable();
            $table->string('FrequenciaFuma')->nullable();
            $table->string('QueixasPaciente')->nullable();
            $table->string('Alcoolatra?')->nullable();
            $table->string('Insonia?')->nullable();
            $table->string('Depressao?')->nullable();
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
