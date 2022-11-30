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
                <a class="btn btn-outline-primary" href="{{route('aluno.create')}}">Novo</a>
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
                                    <a href="{{route('aluno.show',$aluno->id)}}" class="btn btn-outline-info">Visualizar</a>
                                    <a href="{{route('aluno.edit',$aluno->id)}}" class="btn btn-outline-success mx-2">Editar</a>
                                    {{--  --}}
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar</button>
                                </td>
            
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex justify-content-end p-3">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="d-flex flex-column text-center p-5 pt-0 align-items-center">
            <h2 class="fw-bold" id="exampleModalLabel" style="color: #dc3545; border-bottom: 1px solid #dc3545;">Deletar Aluno</h1>
            <h3 class="fw-normal">Tem certeza que deseja deletar este aluno?</h2>
           </div>
            <div class="d-flex justify-content-center p-3">
                <button type="button" class="btn btn-modal-cancel me-2" data-bs-dismiss="modal">Cancelar</button>
                <a href="{{route('aluno.delete',$aluno->id)}}" class="btn-modal-delete btn">Deletar</a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection