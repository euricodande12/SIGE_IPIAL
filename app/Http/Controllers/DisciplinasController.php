<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Curso;

class DisciplinasController extends Controller
{
    public function index()
    {
       $disciplinas = Disciplina::all();

       $cursos = Curso::all(['nome_curso']);

       $cursos = Curso::all(['curso_id', 'nome_curso']);

        return view('disciplina.disciplinas', ['disciplinas'=>$disciplinas, 'cursos'=>$cursos]);
    }
    public function create()
    {
        return view('disciplina.regi-disciplina');
    }
    public function store(Request $request)
    {
        $disciplinas = new Disciplina();
        $disciplinas->nome_disciplina = $request->nome_disciplina;
        $disciplinas->componente = $request->componente;
        $disciplinas->tempo_prova = $request-> tempo_prova;
        $disciplinas->sigla = $request->sigla;
        $disciplinas->curso_id = $request->curso[$j];
        $disciplinas->save();
         return redirect()->route('disciplina.index');
    }
    public function edit($disciplina_id)
    {
        $disciplinas = Disciplina::where('disciplina_id',$disciplina_id)->first();
        if(!empty($disciplinas))
        {
            return view('disciplina.edit-disciplina', ['disciplinas'=>$disciplinas]);
        }
        else{
                return redirect()->route('disciplina.index');
        }
    }
    public function update(Request $request, $disciplina_id)
    {
<<<<<<< HEAD
        // $data = [
        //     ''
        //     ''
        //     ''
        //     ''
        // ];
        // return redirect()->route('disciplina.index');
=======
        $dado = [
            'nome_disciplina' =>$request->nome_disciplina,
            'componente' =>$request->componente,
            'tempo_prova' =>$request->tempo_prova,
            'sigla' => $request->sigla,
            'curso_id' => $request->curso[$j],
        ];
        Disciplina::where('disciplina_id',$disciplina_id)->update($dado);

        return redirect()->route('disciplina.index');
>>>>>>> 1d002a34be5bf26a32fb28e3e6cd9084bb28d107

    }



}
