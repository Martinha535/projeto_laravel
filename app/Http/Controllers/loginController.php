<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request){
        if ($request -> email == 'teste@gmail.com' && $request -> senha == '87654321'){
            session (['usuário' => 'Francisco']);
            return redirect()->route('paciente.covid');
        }
        return redirect()->back()->with('erro','login ou senha incorreta');
    }
}
