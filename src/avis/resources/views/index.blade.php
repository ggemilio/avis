<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="index.html" method="post">
      <label for="start_date">Start Date</label>
      <input type="date" name="start_date" min="<?php echo date('m-d-y'); ?>" value="<?php echo date('d/m/y'); ?>">
    </form>
  </body>
</html>
