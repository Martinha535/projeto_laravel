<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paciente;
use Illuminate\Support\Facades\Redirect;

class PacienteController extends Controller
{

  //
  public function paciente(){
    return view('covid');

}
    /**
     * Exibe uma tela de boas-vindas!
     */
    public function covid(){
    	return view('covid');

}
/**
     * Mostrar formulario para cadastrar um paciente
     */
    public function cadastrar(){
      return view ('cadastrar');

    }
    /**
     * Mostrar formulário para login do paciente cadastrado
     */
    public function login(){
      return view('login');
    }
 
	/**
     * Exibe um formulário de queixas do paciente
     */
    public function queixa(){
    	return view('queixa');
    } 
    
    public function criarQueixa(Request $request){
      $request->validate([
        'nome'=>'required',
        'sobrenome'=>'required',
        'telefone'=>'required',
        'email'=>'required',
        'cidade'=>'required',
        'mensagem'=>'required'
      ]);

      $paciente=Paciente::create([
        'Nome'=>$request->Nome,
        'Sobrenome'=>$request->Sobrenome,
        'CPF'=>$request->CPF,
        'RG'=>$request->RG,
        'Datadenascimento'=>$request->Datadenascimento,
        'Sexo'=>$request->Sexo,
        'Email'=>$request->Email,
        'Senha'=>$request->Senha,
        'Telefone'=>$request->Telefone,
        'Endereco'=>$request->Endereco,
        'Logradouro'=>$request->Logradouro,
        'Complemento'=>$request->Complemento,
        'Numero'=>$request->Numero,
        'Bairro'=>$request->Bairro,
        'Cidade'=>$request->Cidade,
        'UF'=>$request->UF,
        'CEP'=>$request->CEP,
        'EstadoCivil'=>$request->EstadoCivil,
        'Naturalidade'=>$request->Naturalidade,
        'Nacionalidade'=>$request->Nacionalidade,
        'NomeMae'=>$request->NomeMae,
        'NumCartaoSus' => $request -> NumCartaoSus,
        'Altura'=>$request->Altura,
        'Peso'=>$request->Peso,
        'Cor'=>$request->Cor,
        'Idade'=>$request->Idade,
        'Profissao'=>$request->Profissao,
        'Escolaridade'=>$request->Escolaridade,
        'Pais'=>$request->Pais,
        'DataCadastro'=>$request->DataCadastro,
        'TipoSanguineo'=>$request->TipoSanguineo,
        'FatorRh'=>$request->FatorRh,
        'SintomasPaciente'=>$request->SintomasPaciente,
        'ComorbidadesPaciente'=>$request->ComorbidadesPaciente,
        'VacinasTomadasPaciente'=>$request->VacinasTomadasPaciente,
        'ExamesPaciente'=>$request->ExamesPaciente,
        'ConsultasPaciente'=>$request->ConsultasPaciente,
        'ProntuarioPaciente'=>$request->ProntuarioPaciente,
        'IMCPaciente'=>$request->IMCPaciente,
        'DiagnosticoPaciente'=>$request->DiagnosticoPaciente,
        'DuracaoSintomas'=>$request->DuracaoSintomas,
        'AlergiasPaciente'=>$request->AlergiasPaciente,
        'PacienteFuma?'=>$request->PacienteFuma,
        'IdadeIniciouFumar'=>$request->IdadeIniciouFumar,
        'FrequenciaFuma'=>$request->FrequenciaFuma,
        'QueixasPaciente'=>$request->QueixasPaciente,
        'Alcoolatra?'=>$request->Alcoolatra,
        'Insonia?'=>$request->Insonia,
        'Depressao?'=>$request->Depressao,
        'cor'=>$request->Cor,
        $obj=>save();
      ])


      return redirect()->route('paciente.finalizar')->with('sucesso', 'Queixa cadastrada com sucesso');    
    }
    /**
     * Faz um comentário sobre o site
     */
    public function sobre(){
    	return view('sobre');
    } 
     /**
     * Exibe uma lista de perguntas sobre covid-19
     */
    public function informar(){
    	return view('informar');
    }   
  
  /**
  * Exibe uma tela para o paciente tirar dúvidas e sugerir
  */
    public function opinar(){
      return view('opinar');
  }   
   /**
  * Exibe a tela final do aplicativo para o paciente
  */
  public function finalizar(){
    return view('finalizar');
  }   
}

