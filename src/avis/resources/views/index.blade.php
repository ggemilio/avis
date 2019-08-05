<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="{{route('new.reservation')}}" method="get">
      <label for="">Start Date</label>
      <input type="date" name="start-date">
      <label for="">Finish Date</label>
      <input type="date" name="finish-date">
      <select class="" name="establishent">
        <option value="aeropuerto-GDL">Aeropuerto Internacional de GDL</option>
        <option value="aeropuerto-CDMX">Aeropuerto Internacional de CDMX</option>
        <option value=""></option>
      </select>
      <input type="submit" name="" value="submit">
    </form>
  </body>
</html>
