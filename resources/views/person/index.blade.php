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
    <section class="title"><h1>Seja bem vindo a gestão de pessoas</h1></section>
    <a href="{{ route('auth.logout') }}" class="btn danger">Sair do sistema</a>
    <span class=" btn" style="margin-top: 10px; font-weight: lighter">Entrou como <b style="font-weight: bold; margin-left: 10px;">{{ request()->user()->name }}</b> </span>
    <table class="list">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Codigo do BI</th>
            <th>Salario</th>
            <th>Estado (Activo/Desactivo)</th>
            <th>Acções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($people as $person)
            <tr>
                <td>{{ $person->id }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->born_date }}</td>
                <td>{{ $person->bi }}</td>
                <td>{{ $person->salary }}</td>
                <td>{{ $person->state == 1 ? "Activo" : "Desactivo" }}</td>
                <td class="action">
                    <a href="{{ route('person.edit', $person->id) }}" class="btn">Editar</a>
                    <form action="{{ route('person.destroy', $person->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button  type="submit" class="btn danger">Apagar</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    <section class="options">
        <a href="{{ route('person.create') }}" class="btn">Adicionar nova pessoa</a>
    </section>
</div>
</body>
</html>
