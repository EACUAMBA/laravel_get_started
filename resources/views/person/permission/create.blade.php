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
        <h1>Crie aqui novas permissões</h1>
    </section>

    <section class="form">
        <form action="{{ route('permission.store') }}" method="post">
            @csrf
            @method('post')

            <fieldset class="name" style="display: flex; align-items: center; padding-right: 20px">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="@error('name') error @enderror"
                       @if(empty(request()->old('name'))) placeholder="Nome" @else value="{{request()->old('name')}}"
                       @endif  }} style="flex: 1; margin-left: 10px">
                @error('name')
                <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                @enderror
            </fieldset>

            <div style="display: flex">
                <fieldset class="can_create"  class="@error('can_create') error @enderror" style="display: flex; width: 50%">
                    <legend>Pode criar?</legend>
                    <span style="width: 100%; display: flex;">
                        <label for="can_create">Sim</label>
                    <input type="radio" value="1" name="can_create" id="can_create" @if(request()->old('can_create')) checked @endif>
                    </span>

                    <span style="width: 100%; display: flex;">
                    <label for="can_create">Não</label>
                    <input type="radio" value="0" name="can_create" id="can_create" @if(!request()->old('can_create')) checked @endif>
                    </span>
                    @error('can_create')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="can_edit"  class="@error('can_edit') error @enderror" style="display: flex; width: 50%">
                    <legend>Pode editar?</legend>

                    <span style="width: 100%; display: flex;">
                    <label for="can_edit">Sim</label>
                    <input type="radio" value="1" name="can_edit" id="can_edit" @if(request()->old('can_edit')) checked @endif>
                    </span>

                    <span style="width: 100%; display: flex;">
                    <label for="can_edit">Não</label>
                    <input type="radio" value="0" name="can_edit" id="can_edit" @if(!request()->old('can_edit')) checked @endif>
                    </span>
                    @error('can_edit')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>

            </div>

            <div style="display: flex">
                <fieldset class="can_delete"  class="@error('can_delete') error @enderror" style="display: flex; width: 50%">
                    <legend style="color: #ff626c">Pode apagar?</legend>
                    <span style="width: 100%; display: flex;">
                        <label for="can_delete">Sim</label>
                    <input type="radio" value="1" name="can_delete" id="can_delete" @if(request()->old('can_delete')) checked @endif>
                    </span>

                    <span style="width: 100%; display: flex;">
                    <label for="can_delete">Não</label>
                    <input type="radio" value="0" name="can_delete" id="can_delete" @if(!request()->old('can_delete')) checked @endif>
                    </span>
                    @error('can_delete')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>

                <fieldset class="can_see"  class="@error('can_see') error @enderror" style="display: flex; width: 50%">
                    <legend>Pode ver?</legend>

                    <span style="width: 100%; display: flex;">
                    <label for="can_see">Sim</label>
                    <input type="radio" value="1" name="can_see" id="can_see" @if(request()->old('can_see')) checked @endif>
                    </span>

                    <span style="width: 100%; display: flex;">
                    <label for="can_see">Não</label>
                    <input type="radio" value="0" name="can_see" id="can_see" @if(!request()->old('can_see')) checked @endif>
                    </span>
                    @error('can_see')
                    <span style="font-size: 0.7rem; color: #ff626c">{{ $message }}</span>
                    @enderror
                </fieldset>

            </div>

            <div class="options">
                <input type="submit" class="btn" value="Cadastrar">
                <a href="{{ route('permission.index') }}" class="btn normal">Voltar</a>
            </div>
        </form>
    </section>
</section>
</body>
</html>
