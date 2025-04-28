<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <title>Home</title>
</head>

<body>
    <header class="p-4">
        <h1>I miei Film su Laravel</h1>
    </header>

    <main class="container mt-4">
        <div class="row row-cols-3">
            @foreach ($movies as $current)
                <div class="col">
                    <div class="mycard">
                        <h4>{{ $current['title'] }}</h4>
                        <p>({{ $current['original_title'] }})</p>
                        <p>{{ $current['nationality'] }}</p>
                        <p>{{ $current['date'] }}</p>
                        <hr>
                        <p>VOTO: {{ $current['vote'] }}</p>

                    </div>
                </div>
            @endforeach
        </div>

    </main>

</body>

</html>
