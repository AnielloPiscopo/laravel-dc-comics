<form action="{{route($route , $comic->id)}}" method="POST">
    @csrf
    @method($formMethod)

    @if ($errors->has('title'))
    <div>
        <ul>
            @foreach ($errors->get('title') as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="text" name="title" placeholder="Insert the title" value="{{old('title', $comic->title)}}">

    @if ($errors->has('description'))
    <div>
        <ul>
            @foreach ($errors->get('description') as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <textarea name="description" cols="30" rows="10" placeholder="Insert the description">{{old('description', $comic->description)}}</textarea>

    @if ($errors->has('thumb'))
    <div>
        <ul>
            @foreach ($errors->get('thumb') as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="text" name="thumb" placeholder="Insert the thumb of the img" value="{{old('thumb', $comic->thumb)}}">

    @if ($errors->has('price'))
    <div>
        <ul>
            @foreach ($errors->get('price') as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="number" name="price" placeholder="Insert the price"  step="0.01" value="{{old('price', $comic->price)}}" min='0.1' max='999999.99'>

    @if ($errors->has('series'))
    <div>
        <ul>
            @foreach ($errors->get('series') as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="text" name="series" placeholder="Insert the series" value="{{old('series', $comic->series)}}">

    @if ($errors->has('sale_date'))
    <div>
        <ul>
            @foreach ($errors->get('sale_date') as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="date" name="sale_date" placeholder="Insert the sale date" value="{{old('sale_date', $comic->sale_date)}}">

    @if ($errors->has('type'))
    <div>
        <ul>
            @foreach ($errors->get('type') as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="text" name="type" placeholder="Insert the type" value="{{old('type') ?? $comic->type}}">
    <button type="submit">Click</button>
</form>