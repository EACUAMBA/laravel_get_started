<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left mb-2">

                <h2>Edit Post</h2>

            </div>

            <div class="pull-right">

                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>

            </div>

        </div>

    </div>

    @if(session('status'))

        <div class="alert alert-success mb-i mt-1">

            {{ session('status') }}

        </div>

    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">

        @csrf

        @method('put')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Post Title:</strong>

                    <input type="text" name="title" placeholder="Post Title" value="{{ $post->title }}"
                           class="form-control">

                    @error('title')

                    <div class="alert alert-danger mt-1 mb-1">

                        {{ $message }}

                    </div>

                    @enderror


                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Post Description:</strong>

                    <textarea type="text" name="description" placeholder="Post Description"
                              value="{{ $post->description }}" class="form-control" style="height: 150px">

                    </textarea>

                    @error('description')

                    <div class="alert alert-danger mt-1 mb-1">

                        {{ $message }}

                    </div>

                    @enderror


                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Post Image:</strong>

                    <input type="file" name="image" placeholder="Post Image" class="form-control">

                    @error('image')

                    <div class="alert alert-danger mt-1 mb-1">

                        {{ $message }}

                    </div>

                    @enderror

                </div>

                <div class="form-group">

                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" height="200" width="200"/>

                </div>

            </div>

            <button class="btn btn-primary ml-3">Submit</button>

        </div>

    </form>

</div>
</body>
</html>

