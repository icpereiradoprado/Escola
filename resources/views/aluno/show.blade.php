@extends('layouts.default')

@section('contents')
    <div class="container">

            <div class="row flex-column">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <label class="form-label m-0"><strong>Nome:&nbsp;</strong></label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{$aluno->nome}}">
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <label class="form-label m-0"><strong>Telefone:&nbsp;</strong></label>
                        <input type="text" class="form-control" id="nome" name="nome" pattern="[0-9]{14}" value="{{$aluno->telefone}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <label class="form-label m-0" style="white-space: nowrap"><strong>Data de Nascimento:</strong>&nbsp;</label>
                        <input type="date" class="form-control" id="dtNascto" name="dtNascto" value="{{$aluno->dtNascto}}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <label class="form-label m-0"><strong>Turma:</strong>&nbsp;</label>
                        <input type="text" class="form-control" id="turma" name="turma" value="{{$aluno->turma}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <label class="form-label m-0"><strong>Responsável:</strong>&nbsp;</label>
                        <input type="text" name="responsavel" id="responsavel" class="form-control" value="{{$aluno->responsavel}}"/>
                    </div>
                </div>
            </div>

    </div>
@endsection
