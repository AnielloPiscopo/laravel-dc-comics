<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics List</title>
</head>
<body>
    <ul>
        @forelse ($comics as $comic)
            @dump($comic)
        @empty
            <p>La lista è vuota</p>
        @endforelse
    </ul>
</body>
</html>