<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
</head>

<body>
    <div class="container">
        <div class="content">
            @if (session('error'))
                <p class="error" >Error: {{ session('error') }}</p>
            @endif
            <form action="{{ route('site.login') }}" method="post" class="form-control form-vertical">
                @csrf

                <p class="title">Login - Dash Serralheria</p>

                <input required="" class="input" name="email" id="email" placeholder="Email" />



                <input required="" class="input" type="password" name="password" id="password"
                    placeholder="password" />


                <a>Forgot your password?</a>
                <button class="submit-btn" type="submit" name="login">Sign In</button>
                <a href="{{ route('site.index') }}" class="">Voltar</a>
            </form>



        </div>
    </div>
</body>

</html>
