@extends('layouts.main')

@section('title', 'Mini-pautas')

@section('conteudo')
    <main id="main" class="main">
        <div class="pagetitle">
            <div class="row">
                <div class="col">
                    <h1>Mini-Pautas</h1>      
                </div>
            
                <div class="col-lg-2">
                    <select class="btn-sel form-select" name="opcoes" id="filtro3" >
                        <option disabled selected>Turma</option>
                        <option value="I10AM">I10AM</option>
                        <option value="I11AM">I11AM</option>
                        <option value="I12AT">TI12AT</option>
                        <option value="I13AT">I13AM</option>
                    </select>
                </div>        
            </div>
        </div>

        <div class="procurar">
            <form class="proc-form d-flex align-items-center">
                <input id="pesquisa" type="text" placeholder="Digite o Ano da Pauta que procuras" name="" class="campo-pesq">
                <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
            </form>
        </div>

        <!-- /  Inicio da tabela de inscritos -->
        <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
            <thead  style=" text-align: center;">
                <tr>
                    <th scope="col">ANO</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Periodo</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                    <!--<tr style=" text-align: center;">
                        <th scope="row">{{-- $a->ano_lectivo->ano_lectivo --}}</th>
                        <td>{{-- $a->turma->belongClasse->classe --}}</td>
                        <td>{{-- $a->turma->nome_turma --}}</td>
                        <td>Informática</td>
                        <td>Manhã</td>
                        <td>MAT</td>
                        <td>
                            <a href={{ route('mini-pauta.show') }} class="btn btn-cor-sg-a">Ver Mini-pauta</a>
                        </td>
                    </tr> -->
                @foreach ($turmas as $turma)
                    <tr  style=" text-align: center;">
                        <th scope="row">2020-2021</th>
                        <td>{{ $turma->belongClasse->classe }}</td>
                        <td>{{ $turma->nome_turma }}</td>
                        <td>{{ $turma->curso->nome_curso }}</td>
                        <td>{{ $turma->turno->nome_turno }}</td>
                        <td>Ok</td>
                        <td>
                            <a href={{ route('mini-pauta.show') }} class="btn btn-cor-sg-a">Ver Mini-pauta</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    </main>
@endsection