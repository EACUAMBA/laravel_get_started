<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo á Laravel_Get_Started</title>

    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    <style>
        html,body{
            height: 100%;
            margin: 0;
            padding: 0;

            font-family: "Montserrat", sans-serif;
            font-size: 100%;
        }

        .container{
            max-width: 1280px;
            margin: 0 auto;
            width: 90%;
            background-color: #000000;
            display: flex;
            flex-direction: column;
        }

        .title{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .title h1{
            font-size: 1.5rem;
            color: white;
        }
        h1, h2, h3, h4, h5, h6, p, small, b, s, i{
            color: white;
        }


        .products{
            display: flex;
            padding: 18px;
        }

        .products .product a{
            display: flex; flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 250px;
            width: 250px;
            border: 2px #6ebaff solid;
            box-shadow: 0 0 18px rgb(110, 186, 255);
            border-radius: 18px;
        }
        .products .product a{
            text-decoration: none;
            color: white;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            color: #ffffff;
        }


    </style>
</head>
<body>
    <section class="container">
        <section class="title">
            <h1>Laravel Get Started</h1>
        </section>
        <section class="products">
            <article class="product">
                <a href="{{route('posts.index')}}">
                    <i class="fas fa-circle"></i>
                    Uploading Images Project
                </a>
            </article>
        </section>
    </section>
</body>
</html>
