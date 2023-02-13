<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comic - {{$comic['title']}}</title>
</head>
<body>
    <article class="my_card">
        <div class="my_img-container">
            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" title="{{$comic['series']}}">
        </div>
        <ul>
            <li>{{$comic->title}}</li>
            <li>{{$comic->description}}</li>
            <li>{{$comic->price}}</li>
            <li>{{$comic->sale_date}}</li>
            <li>{{$comic->type}}</li>
        </ul>
    </article>
</body>
</html>