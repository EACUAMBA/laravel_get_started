<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ url(mix('auth/css/reset.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('auth/css/style.css')) }}">
</head>
<body>
    <div class="container">
        <section class="title">
            Bem vindo ao Sistema de Gestão de Pessoas | SGP
        </section>

        <section class="form">
            <legend>Faça login para usar o sistema</legend>
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                @method('post')

                <fieldset>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                    @error('email')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                    @error('password')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset>
                    <input type="submit" name="login" value="Log in" class="btn">
                </fieldset>
            </form>
        </section>
    </div>
</body>
</html>
