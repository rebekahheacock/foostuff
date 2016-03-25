<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foostuff' --}}
        @yield('title','Foostuff')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <h1>Foostuff</h1>
    </header>

    <nav>
        <ul>
            <li><a href='/stuff'>View all stuff</a></li>
            <li><a href='/stuff/create'>Add a new thing</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>