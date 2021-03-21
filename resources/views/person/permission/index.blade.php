<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permissões</title>

    <link rel="stylesheet" href="{{ url(mix('person/permission/css/reset.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('person/permission/css/style.css')) }}">
</head>
<body>
<section class="container">
    <section class="title">
        <h1>Bem vindo ao gerenciador de permissões</h1>

    </section>
    <section class="message"> @error('message') {{ $message }} @enderror</section>
    <section class="table-permissions">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Pode Criar</th>
                <th>Pode Apagar</th>
                <th>Pode Editar</th>
                <th>Pode Ver</th>
                <th>Data de Criação</th>
                <th colspan="2">Ação</th>
            </tr>
            </thead>

            <tbody>
            @if(isset($permissions))
                @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>@if($permission->can_create) Sim @else Não @endif</td>
                            <td>@if($permission->can_edit) Sim @else Não @endif</td>
                            <td>@if($permission->can_delete) Sim @else Não @endif</td>
                            <td>@if($permission->can_see) Sim @else Não @endif</td>
                            <td>{{ \Illuminate\Support\Facades\Date::make($permission->created_at)->format('d-m-Y h:i:s ') }}</td>
                            <td><a href="{{ route('permission.edit', $permission->id) }}" class="button">Editar</a></td>
                            <td>
                                <form action="{{ route('permission.destroy', $permission->id) }}"
                                      method="post">@csrf @method('put') <input type="submit" value="Apagar"
                                                                                class="button danger"></form>
                            </td>

                        </tr>
                @endforeach .
            @endif
            </tbody>
        </table>
    </section>
    <section class="operations">
        <a href="{{ route('permission.create') }}" class="button">Adicionar permissão</a>
    </section>
</section>
</body>
</html>
