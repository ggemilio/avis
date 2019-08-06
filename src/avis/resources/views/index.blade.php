<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="{{route('reservation.extras')}}" method="post">
      {{csrf_field()}}
      <label for="">Start Date</label>
      <input type="date" name="start-date">
      <label for="">Finish Date</label>
      <input type="date" name="finish-date">
      <br><br>
      <label for="">Pickup location</label>
      <select class="" name="establishment-pickup">
        @foreach($establishments as $establishment)
        <option value="{{$establishment -> id}}">{{$establishment-> establishment_name}}</option>
        @endforeach
      </select>
      <br><br>
      <label for="">Drop off location</label>
      <select class="" name="establishment-dropoff">
        @foreach($establishments as $establishment)
        <option value="{{$establishment -> id}}">{{$establishment-> establishment_name}}</option>
        @endforeach
      </select>
      <br><br>
      <input type="submit" name="" value="submit">
    </form>
  </body>
</html>
