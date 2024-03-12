<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>

<body>
    <main>
        <h1 class="text-center">Film</h1>
        <ul>
            @foreach ($movies as $movie)
            <li>
                <h2>
                    {{$movie['title']}}
                </h2>
                <ul>
                    <li><strong>Titolo Originale:</strong> {{$movie['original_title']}}</li>
                    <li><strong>Nazionalità:</strong> {{$movie['nationality']}}</li>
                    <li><strong>Voto:</strong> {{$movie['vote']}}</li>
                    <li><strong>Data di uscita:</strong> {{$movie['date']}}</li>
                </ul>
            </li>

            @endforeach
        </ul>
    </main>
</body>

</html>