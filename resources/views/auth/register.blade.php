@extends('layouts.app')

@section('content')

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
					
					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Crie sua conta</h4>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nome</strong></label>
                                            <input type="text" class="form-control" placeholder="Nome" name="name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Senha</strong></label>
                                            <input type="password" class="form-control" value="" name="password" placeholder="digite uma senha">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Confirmar senha</strong></label>
                                            <input type="password" class="form-control" value="" name="password_confirmation" placeholder="repita a senha">

                                            @error('repeat-password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Criar</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Já tem uma conta? <a class="text-white" href="{{ route('login') }}">Entrar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection
