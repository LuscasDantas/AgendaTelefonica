<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda Telefônica | @yield('title')</title>

    <!-- Fonte do Google -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> --}}

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Contatos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('message'))
                    <p class="message">{{ session('message') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    {{-- <footer>
        <p>Gamer Universe &copy; 2022</p>
    </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>