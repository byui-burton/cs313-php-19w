<?php
    $user = htmlspecialchars($_GET["username"]);

    setcookie("person-name", $user, time() + (86400 * 30));

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
    echo "<h1>Welcome $user, you are now signed in...</h1>";
?>
    
</body>
</html>