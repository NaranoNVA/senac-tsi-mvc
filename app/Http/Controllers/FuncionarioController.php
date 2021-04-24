<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function listar(){
        $funcionarios = Funcionario::all();

        return view('funcionario.listar', ['funcionarios' => $funcionarios]);
    }
}
