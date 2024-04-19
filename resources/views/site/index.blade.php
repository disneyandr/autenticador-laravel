<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="imagem">
                <img src="{{asset('img/logo.png')}}" alt="logo" srcset="">
            </div>
            <button class="ui-btn">
                <span>
                  <a href="{{ route('site.login') }}">Login</a>
                </span>
              </button>
        </div>
    </div>
</body>

</html>
