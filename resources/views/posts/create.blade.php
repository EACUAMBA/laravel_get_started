<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left mb-2">

                <h2>Add New Post</h2>

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

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Post Title:</strong>

                    <input type="text" name="title" placeholder="Post Title" class="form-control">

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

                    <input type="text" name="description" placeholder="Post Description" class="form-control">

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

            </div>

            <button class="btn btn-primary ml-3">Submit</button>

        </div>

    </form>

</div>
</body>
</html>
