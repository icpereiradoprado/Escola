@extends('layouts.default')

@section('contents')
    <div class="container">
        <form action="{{route('aluno.update',$aluno->id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$aluno->nome}}" required>
                </div>
                <div class="col-lg-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dtNascto" name="dtNascto" value="{{$aluno->dtNascto}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" pattern="\+\d{13}" value="{{$aluno->telefone}}" required>
                </div>
                <div class="col-lg-6">
                    <label class="form-label">Turma</label>
                    <input type="text" class="form-control" id="turma" name="turma" value="{{$aluno->turma}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label class="form-label">Responsável</label>
                    <input type="text" class="form-control" id="responsavel" name="responsavel" value="{{$aluno->nome}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{route('aluno.alunos')}}" class="btn btn-outline-warning my-2">Voltar</a>
                    <input type="submit" class="btn btn-outline-primary my-2" value="Salvar">
                </div>
            </div>
        </form>
    </div>
@endsection