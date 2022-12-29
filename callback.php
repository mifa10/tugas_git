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
    function my_callback($item)
    {
        return strlen($item);
    }
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    ?>
  </body>
</html>
