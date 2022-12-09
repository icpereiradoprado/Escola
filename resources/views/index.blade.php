@extends('layouts.default')
@section('contents')
    <div class="container-fluid h-100">
        <div class="container h-100">
            
                <div class="row h-100 py-3">
                    <div class="col-lg-6 d-flex align-items-center">
                        <form action="{{route('login')}}" method="post" class="w-100" id="formLogin">
                            @csrf
                            <h1 class="fw-bold text-center mt-5 mb-5">Login para a sua conta</h1>
                            <div class="d-flex w-100 align-items-center">
                                <div class="line"></div>
                                <p class="fillFields">Preencha os campos</p>
                                <div class="line"></div>
                            </div>
                            <div class="d-flex flex-column">
                                @if (session('logado') == 0 || session('logado') == 2)
                                    <span id="errorMsg">Usuário ou Senha inválidos</span>
                                @else
                                @endif
                                <input class="mt-3 mb-3 login" type="text" name="login" id="login" placeholder="RA" required>
                                <input class="mb-3 login" type="password" name="senha" id="senha" placeholder="Senha" required>
                                <input type="submit" class="btn btn-logar w-50 m-auto" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                    <div class="h-100 position-relative bg-linear-gradiente d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center w-100 position-absolute top-37">
                            <h1 class="m-0 color-white mb-2">Novo por aqui?</h1>
                            <p class="m-0 color-white">Cadastre agora mesmo !</p>
                        </div>
                        <a class="cadastrar btn w-25 m-auto position-absolute top-65" href="{{route('aluno.create')}}">Cadastrar-se</a>
                    </div>
                        
                    </div>
                </div>
                
        </div>
    </div>
@endsection