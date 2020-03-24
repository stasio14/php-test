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
    <form action="ans.php" method="POST">
      <input type="text" name="number"/><br />
      <input type="submit" value="show result" /><br />
    </form>
  </body>
</html>
