<?php

try
{
  $dbUrl = getenv('DATABASE_URL');
  $db = new PDO($dbUrl);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
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
    
    <ul>
<?php

foreach ($db->query('SELECT * FROM actor') as $row)
{
    $name = $row['name'];
    echo "<li><p>$name</p></li>";
}
?>
</ul>

</body>
</html>