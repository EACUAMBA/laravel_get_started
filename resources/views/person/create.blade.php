<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoa</title>

    <link rel="stylesheet" href="{{ url(mix('person/css/reset.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('person/css/estilo.css')) }}">
</head>
<body>
<div class="container">
    <section class="title">
        <h1>Seja bem vindo a gestão de pessoas</h1>
        <h2>Área de criação de novas pessoas</h2>

    </section>

    <section class="form">
        <form action="{{ route('person.store') }}" method="post">
            @csrf
            @method('post')

            <fieldset class="name">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="@error('name') error @enderror"
                       @if(empty(request()->old('name'))) placeholder="Nome" @else value="{{request()->old('name')}}"
                       @endif  }}>
                @error('name')
                <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                @enderror
            </fieldset>

            <div>
                <fieldset class="born_date">
                    <label for="born_date">Data de Nascimento</label>
                    <input type="date" name="born_date" id="born_date"
                           class="@error('born_date') error @enderror"
                           @if(empty(request()->old('born_date'))) placeholder="Data de nascimento"
                           @else value="{{request()->old('born_date')}}"
                        @endif>
                    @error('born_date')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>
                <fieldset class="bi">
                    <label for="bi">Codigo de BI:</label>
                    <input type="text" name="bi" id="bi"
                           class="@error('bi') error @enderror"
                           @if(empty(request()->old('bi'))) placeholder="Codigo do BI"
                           @else value="{{request()->old('bi')}}"
                        @endif>
                    @error('bi')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>
            </div>

            <div>
                <fieldset class="salary">
                    <label for="salary">Salario:</label>
                    <input type="text" name="salary" id="salary"
                           class="@error('salary') error @enderror"
                           @if(empty(request()->old('salary'))) placeholder="Salario"
                           @else value="{{request()->old('salary')}}"
                        @endif>
                    @error('salary')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>
                <fieldset class="state">
                    <label for="state">Estado:</label>
                    <select name="state" id="state" class="@error('state') error @enderror">
                        <option value="1" selected>Activo</option>
                        <option value="0">Desactivo</option>
                    </select>
                    @error('state')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>
            </div>

            <fieldset class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="@error('email') error @enderror"
                       @if(empty(request()->old('email'))) placeholder="Email" @else value="{{request()->old('email')}}"
                       @endif  }}>
                @error('email')
                <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                @enderror
            </fieldset>


            <div class="password">
                <fieldset class="password">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="@error('password') error @enderror"
                           @if(empty(request()->old('password'))) placeholder="Password"
                           @else value="{{request()->old('password')}}"
                           @endif  }}>
                    @error('password')
                        <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>
                <fieldset class="password_confirm">
                    <label for="password_confirm">Confirma o password</label>
                    <input type="text" name="password_confirm" id="password_confirm"
                           class="@error('password_confirm') error @enderror"
                           @if(empty(request()->old('password_confirm'))) placeholder="Confirm your password"
                           @else value="{{request()->old('password_confirm')}}"
                           @endif  }}>
                    @error('password_confirm')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>
            </div>


            <div class="options">
                <input type="submit" class="btn" value="Cadastrar">
                <a href="{{ route('person.index') }}" class="btn normal">Voltar</a>
            </div>
        </form>
    </section>
</div>
</body>
</html>
