<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('reservation.checkout')}}" method="post">
      {{csrf_field()}}
      <select name="category">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->category_name}}</option></p>
        @endforeach
      </select>
      <br><br>
      @foreach($extras as $extra)
      <label>{{$extra->name}} - {{$extra->price}}</label>
      <input type="checkbox" name=''>
      <br><br>
      @endforeach
      <input type="submit" value="Procced to checkout">
    </form>
  </body>
</html>
