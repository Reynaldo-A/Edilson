
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de temperatura.</title>
</head>
<body>
  
    <form action="temperatura-logica.html" method="post"> 
      <input type="number" name="temperatura">
      C<input type="radio" name="graus" value="C">
      F<input type="radio" name="graus" value="F">
      <input type="submit" name="submit" value="Converta">
    </form>

</body>
</html>


<?php

if (isset($_POST['submit'])) {
  $temperatura = $_POST['temperatura'];
  $graus = $_POST['graus'];

  if ($graus == 'C') {
      $result = $temperatura * 9 / 5 + 32 . 'F';
  } else {
      $result = ($temperatura - 32) * 5 / 9 . 'C';
    }

    echo "Temperatura: " . $result;
}
?>