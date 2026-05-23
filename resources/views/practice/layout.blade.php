<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            Yes
        @endif
    </title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    {{-- DESCRIPTION CONTEXT --}}
    @context('description')
        <meta name="description" content="{{ $value }}">
    @endcontext
</head>

<body>
    <div>
        @hasSection('header')
            @yield('header')
        @else
            <nav>
                <ul>
                    <li>yes</li>
                    <li>no</li>
                </ul>
            </nav>
        @endif
    </div>
    <div>
        @yield('content')
    </div>
</body>

</html>
