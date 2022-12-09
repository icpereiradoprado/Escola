@extends('layouts.default')

@section('contents')
    <div class="container">
            <h1 class="fw-bold my-5 text-center">Aluno(a): {{$aluno->nome}}</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mt-3">
                        <div class="col-lg-3 d-flex justify-content-end align-items-center">
                            <label class="form-label m-0"><strong>Nome:&nbsp;</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control login" id="nome" name="nome" value="{{$aluno->nome}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 d-flex justify-content-end align-items-center">
                            <label class="form-label m-0"><strong>Telefone:&nbsp;</strong></label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control login" id="nome" name="nome" pattern="[0-9]{14}" value="{{$aluno->telefone}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 d-flex justify-content-end align-items-center">
                            <label class="form-label m-0" style="white-space: nowrap"><strong>Data de Nascimento:</strong>&nbsp;</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control login" id="dtNascto" name="dtNascto" value="{{$aluno->dtNascto}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 d-flex justify-content-end align-items-center">
                            <label class="form-label m-0"><strong>Turma:</strong>&nbsp;</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control login" id="turma" name="turma" value="{{$aluno->turma}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 d-flex justify-content-end align-items-center">
                            <label class="form-label m-0"><strong>Responsável:</strong>&nbsp;</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="responsavel" id="responsavel" class="form-control login" value="{{$aluno->responsavel}}"/>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-9 d-flex justify-content-end">
                            <a class="btn btn-outline-warning w-25" href="{{route('aluno.alunos')}}">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
