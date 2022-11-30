@extends('layouts.default')

@section('contents')
    <div class="container-fluid">
        <div class="container">
            
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <h1 class="fw-bold text-center mt-5 mb-5">Login para a sua conta</h1>
                            <div class="d-flex w-100 align-items-center">
                                <div class="line"></div>
                                <p class="fillFields">Preencha os campos</p>
                                <div class="line"></div>
                            </div>
                            <div class="d-flex flex-column">
                                <input class="mt-3 mb-3 login" type="text" name="login" id="login" placeholder="RA" required>
                                <input class="mb-3 login" type="password" name="senha" id="senha" placeholder="Senha" required>
                                <a class="btn btn-logar w-50 m-auto" href="">Logar</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">

                        <div class="d-flex flex-column bg-linear-gradiente">
                            <h1>Novo por aqui?</h1>
                            <p>Cadastre agora mesmo !</p>
                            <a class="cadastrar btn w-25 m-auto" href="#">Cadastrar-se</a>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
@endsection