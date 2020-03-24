<?php
  if(isset($number))
  {
    $number = $_POST['number'];
  }
?>

<!DOCTYPE html>
<html>
  <head />
  <body>
    <form method="POST">
      <input type="text" name="number"/><br />
      <input type="submit" value="show result" /><br />
    </form>
    <div><?php if(isset($number)) { echo $number; } ?></div>
  </body>
</html>
