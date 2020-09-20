<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<style>
body {
    background: linear-gradient(100deg, rgb(182, 40, 111) 50%, #ac2066 0);
    /* width: 100%;
    height: 100vh; */
    /* display: flex; */
    justify-content: center;
    align-items: center;
}

/* .containers {
    background: linear-gradient(100deg, rgb(182, 40, 111) 50%, #ac2066 0);
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
} */

.app-wrapper {
    background-color: #292f38;
    min-width: 450px;
    height: 600px;
    padding: 30px;
    box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
}

.wrapper-box {
    background-color: #292f38;
    box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
}

.wrapper-container {
    background-color: #292f38;
    padding: 30px;
    box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
}

.form-dark {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #fcfdff;
    background-color: #495057;
    background-clip: padding-box;
    border: 1px solid #495057;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
</style>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
