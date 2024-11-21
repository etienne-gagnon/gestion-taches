<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <div>
            <h1>GESTIONNAIRE DE TÂCHES</h1>
        </div>
        <ul>
            @auth
                <li><a href="/tasks">Mes Tâches</a></li>
                <form action="/logout" method="POST">
                    @csrf
                    <button>Me déconnecter</button>
                </form>
            @endauth

        </ul>
    </nav>
    <main>
        @yield('main_content')
    </main>
    <footer>
    </footer>


</body>
</html>