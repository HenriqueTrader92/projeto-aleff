<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamentos;
use App\Funcionarios;

class FuncionariosController extends Controller
{
    protected $departamentos;
    protected $funcionarios;

    public function __construct(Departamentos $departamentos,Funcionarios $funcionarios){
        $this->departamentos = $departamentos;
        $this->funcionarios = $funcionarios;
    }

    public function index()
    {
        $departamentos = $this->departamentos->all();

        return view('cadastros.index', compact('departamentos'));
    }

    public function cadFuncionario(Request $request)
    {
        $this->validate($request,Funcionarios::rules(),Funcionarios::customMsgRules());
        
        $novoFuncionario = $this->funcionarios;
        $novoFuncionario->name = $request->name;
        $novoFuncionario->save();
        
        foreach($request->departamentos as $departamentos)
        {
            $novoFuncionario->departamentos()->attach($departamentos);
        }
        
        return redirect()->back()->with([
            'success'=>'Funcionario '.$request->name.' criado com sucesso'
        ]);
    }

}
