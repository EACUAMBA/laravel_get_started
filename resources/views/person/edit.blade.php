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
        <h2>Área de edição de pessoa</h2>

    </section>

    <section class="form">
        <form action="{{ route('person.update', $person->id) }}" method="post">
            @csrf
            @method('put')
            <div id="primarykey"><span>ID: {{ $person->id }}</span></div>
            <fieldset class="name">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Nome" value="{{ $person->name }}">
            </fieldset>

            <div>
                <fieldset class="born_date">
                    <label for="born_date">Data de Nascimento</label>
                    <input type="date" name="born_date" id="born_date" placeholder="Data de Nascimento" value="{{ $person->born_date }}">
                </fieldset>
                <fieldset class="bi">
                    <label for="bi">Codigo de BI:</label>
                    <input type="text" name="bi" id="bi" placeholder="Codigo do BI" value="{{ $person->bi }}">
                </fieldset>
            </div>

            <div>
                <fieldset class="salary">
                    <label for="salary">Salario:</label>
                    <input type="text" name="salary" id="salary" placeholder="Salario" value="{{ $person->salary }}">
                </fieldset>
                <fieldset class="state">
                    <label for="state">Estado:</label>
                    <select name="state" id="state">
                        <option value="1" {{ ($person->state == 1 ? 'selected' : '') }}>Activo</option>
                        <option value="0" {{ ($person->state == 0 ? 'selected' : '') }}>Desactivo</option>
                    </select>
                </fieldset>
            </div>


            {{ $errors  }}
            <div class="options">
                <input type="submit" class="btn" value="Salvar Alterações">
            </div>
        </form>
    </section>

</div>
</body>
</html>
