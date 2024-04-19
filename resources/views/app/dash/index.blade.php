<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <title>Dash</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>Painel de controle - Serralheria</h1>

            @if (isset($credenciais))
                <p>Email: {{ $credenciais['email'] }}</p>
            @endif
        </div>
        <a href="{{ route('site.logout') }}" class="">Logout</a>
    </div>
</body>

</html>
