<html>
    <head>
        <title>{{ $title ?? 'Example Website' }}</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <nav>
            <h3>Welcome to my website</h3>
            <hr>
        </nav>
		  {{ $slot }}
        <footer>
            <hr />
            &copy; 2023 example.com
        </footer>
    </body>
</html>