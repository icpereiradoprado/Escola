@extends('layouts.default')
@push('styles')
    <style>

    </style>
@endpush
@section('contents')
    <div class="container">
        <h1 class="text-center my-5 fw-bold">Cadastrar novo aluno</h1>
        <form action="{{route('aluno.store')}}" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-lg-6">
                    <label class="form-label fw-bold">Nome</label>
                    <input type="text" class="form-control login" id="nome" name="nome" required>
                </div>
                <div class="col-lg-6">
                    <label class="form-label fw-bold">Data de Nascimento</label>
                    <input type="date" class="form-control login" id="dtNascto" name="dtNascto" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <label class="form-label fw-bold">Telefone</label>
                    <input type="text" class="form-control login" id="telefone" name="telefone" pattern="\+\d{13}" placeholder="+5519912345678" required>
                </div>
                <div class="col-lg-6">
                    <label class="form-label fw-bold">Turma</label>
                    <input type="text" class="form-control login" id="turma" name="turma" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <label class="form-label fw-bold">Responsável</label>
                    <input type="text" class="form-control login" id="responsavel" name="responsavel" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{route('aluno.alunos')}}" class="btn btn-outline-warning my-2 size-200 button-100">Voltar</a>
                    <input type="submit" class="btn btn-outline-primary my-2 size-200 button-100" value="Salvar">
                </div>
            </div>
        </form>
    </div>
@endsection