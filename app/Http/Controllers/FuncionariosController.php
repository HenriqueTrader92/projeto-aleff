<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Departamentos;
// use App\Funcionarios;

class FuncionariosController extends Controller
{
    // protected $departamentos;
    // protected $funcionarios;

    // public function __construct(Departamentos $departamentos,Funcionarios $funcionarios){
    //     $this->departamentos = $departamentos;
    //     $this->funcionarios = $funcionarios;
    // }

    public function index()
    {
        // $departamentos = $this->departamentos->all();
        
        // return view('cadastros.index');


        return view('cadastros.index');
    }

    // public function cadFunc(Request $request)
    // {
    //     $this->validate($request,Funcionario::rules(),Funcionario::customMsgRules());
        
    //     $novoFuncionario = $this->funcionario;
    //     $novoFuncionario->nome = $request->nome;
    //     $novoFuncionario->save();
        
    //     foreach($request->departamentos as $departamento)
    //     {
    //         $novoFuncionario->departamentos()->attach($departamento);
    //     }
        
    //     return redirect()->back()->with([
    //         'success'=>'Funcionario '.$request->nome.' criado com sucesso'
    //     ]);

    // }

}
