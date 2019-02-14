<?php
require_once("dbconnect.php");
$db = get_db();

$course_id = $_GET["course_id"];

// Get the Course from the DB
$query = 'SELECT id, name, course_code FROM course WHERE id=:id';
$statement = $db->prepare($query);
$statement->bindValue(':id', $course_id, PDO::PARAM_INT);
$statement->execute();
$course = $statement->fetch(PDO::FETCH_ASSOC);

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
    $course_name = $course['name'];
    $course_code = $course['course_code'];
    echo "<h1>Notes for $course_name - $course_code</h1>";
?>
    
</body>
</html>