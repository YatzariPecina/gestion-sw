<body>
    @vite('resources/css/app.css')
    <title>Portal - @yield('titulo')</title>
    <nav>
        <a href="/">Pagina principal</a>
        <a href="/alumnos">alumnos</a>
    </nav>
    <h1> @yield('titulo')</h1>

    <!--contenido de las paginas-->
    <h3 class="text-3xl font-bold underline">@yield('contenido')</h3>
</body>