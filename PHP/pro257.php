<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
            PHP array_key_exists() Function
            Check if the key "Volvo" exists in an array:
        */

    $cars = array("Volvo" => "XC90", "BMW" => "X5");
    if (array_key_exists("Volvo", $cars)) {
        echo "Key exists!";
    } else {
        echo "Key does not exist!";
    }
    ?>
</body>

</html>