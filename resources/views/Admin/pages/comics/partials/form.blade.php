<form action="{{route($route , $comic->id)}}" method="POST">
    @csrf
    @method($formMethod)
    <input type="text" name="title" placeholder="Insert the title" value="{{$comic->title}}">
    <textarea name="description" cols="30" rows="10" placeholder="Insert the description">{{$comic->description}}</textarea>
    <input type="text" name="thumb" placeholder="Insert the thumb of the img" value="{{$comic->thumb}}">
    <input type="number" name="price" placeholder="Insert the price"  step="0.01" value="{{$comic->price}}" min='0.1' max='999999.99'>
    <input type="text" name="series" placeholder="Insert the series" value="{{$comic->series}}">
    <input type="text" name="sale_date" placeholder="Insert the sale date" value="{{$comic->sale_date}}">
    <input type="text" name="type" placeholder="Insert the type" value="{{$comic->type}}">
    <button type="submit">Click</button>
</form>