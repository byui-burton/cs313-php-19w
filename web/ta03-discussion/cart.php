<?php
    session_start();

    $name = $_SESSION["person-name"];
    
    if (isset($_SESSION["cart"])) {
        $cart = $_SESSION["cart"];
    } else {
        $cart = array();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
    echo "<h1>Shopping cart for user: $name</h1>";


    foreach ($cart as $item) {
        echo "$item<br>";
    }
?>

</body>
</html>