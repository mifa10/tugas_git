<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE-edge"
    <meta name="Viewport" content="width=device-width, initial-scale=1">
    <title>Framework PHP</title>
    <!--Muhammad Iqbal Fikri Apriansyah-->
  </head>
  <body>
  <?php
    // to change a session variable, just overwrite it
    $_SESSION["favanimal"] = "eagle";
    print_r($_SESSION);
    ?>
  </body>
</html>
