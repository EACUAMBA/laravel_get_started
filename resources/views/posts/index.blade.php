<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left mb-2">

                <h2>CRUD Post</h2>

            </div>

            <div class="pull-right">

                <a href="{{ route('posts.create') }}" class="btn btn-success">Create New Post</a>

            </div>

        </div>

    </div>

    @if($message = Session::get('success'))

        <div class="alert alert-success mb-i mt-1">

            {{ $message }}

        </div>

    @endif

    <table class="table table-bordered mt-2">

        <tr>

            <th>S.No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>

        </tr>

        @foreach($posts as $post)

            <tr>

                <td>{{ $post->id }}</td>
                <td><img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" width="75" height="75"></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">

                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>

    {!! $posts->links() !!}

</div>
</body>
</html>
