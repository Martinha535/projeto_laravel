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
        'nome' => 'required',
        'sobrenome' => 'required',
        'telefone' => 'required',
        'email' => 'required',
        'cidade' => 'required',
        'mensagem' => 'required'
      ]);

      Paciente::create($request -> all());

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

