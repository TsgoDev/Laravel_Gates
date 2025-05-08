<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link href="/css/bootstrap-5.3.2.min.css" rel="stylesheet">
    <title>Web Dev | Login</title>
</head>

<body>
    <form action="{{route('auth-user')}}" method="POST">
        @csrf
        <div class="container-login">
            <div class="img-box">
                <img src="/img/imag-login.png" alt="login" class="imag-login">
            </div>
            <div class="content-box">
                <div class="form-box">
                    <h2 class="text-login">Login</h2>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Endereço de e-mail" maxlength="100">
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" id="password" class="form__input-text" placeholder="Senha" maxlength="128">
                        <i class="form__input-icon fas fa-eye" data-password-eye></i>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                    @if(session('danger'))
                    <div class="alert alert-danger">
                        {{session('danger')}}

                    </div>
                    @endif
                    
                    <div class="input-box">
                        <input type="submit" name="btnToEnter" value="Entrar">
                        <div id="caps-lock-alert">Caps Lock Ativado</div>
                        <p id="versao">Versão Beta: 1.0.0</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="/js/view_password.js"></script>
<script src="/js/CapsLock.js"></script>

</html>