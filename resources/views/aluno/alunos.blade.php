@extends('layouts.default')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="py-5 my-2 d-flex justify-content-center bg-light border border-primary">
                <h1 class="fw-normal">Alunos Cadastrados</h1>
            </div>
        </div>
        <div class="py-2 border border-info">
            <div class="col-lg-12">
                <a class="btn btn-outline-danger" href="{{route('aluno.create')}}">Novo</a>
            </div>
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">RA</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Responsável</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $aluno)
                            <tr>
                                <th scope="row">{{$aluno->id}}</th>
                                <td>{{$aluno->nome}}</td>
                                <td>{{$aluno->telefone}}</td>
                                <td>{{$aluno->dtNascto}}</td>
                                <td>{{$aluno->turma}}</td>
                                <td>{{$aluno->responsavel}}</td>
                                <td class="d-flex flex-wrap">
                                    <a href="{{route('aluno.show',$aluno->id)}}" class="btn btn-outline-primary">Visualizar</a>
                                    <a href="{{route('aluno.edit',$aluno->id)}}" class="btn btn-outline-success mx-2">Editar</a>
                                    <a href="{{route('aluno.delete',$aluno->id)}}" class="btn btn-outline-danger">Deletar</a>
                                </td>
            
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection