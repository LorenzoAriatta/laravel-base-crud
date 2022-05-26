<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>DC Comics</title>
</head>

<body>

    <header>
        <div class="dc">
            <div class="title1">
                <p>DC</p>
            </div>
            <div class="title2">
                Comics
            </div>
        </div>
        <a href="{{ route('comics.index') }}">Home &#127968;</a>
        <a href="{{ route('comics.create') }}">Create NEW Comic!</a>
    </header>

    <main>
        @yield('index')



        @yield('show')
    </main>

</body>

</html>
