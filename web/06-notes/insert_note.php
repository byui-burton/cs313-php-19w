<?php

$course_id = htmlspecialchars($_POST['course_id']);
$date = htmlspecialchars($_POST['date']);
$content = htmlspecialchars($_POST['content']);

//echo "Trying to insert: courseid: $course_id, date: $date, content: $content";

require_once("dbconnect.php");
$db = get_db();

// Get the Course from the DB
$query = 'INSERT INTO note(date, content, course_id) VALUES(:date, :content, :course_id)';
$statement = $db->prepare($query);
$statement->bindValue(':date', $date, PDO::PARAM_STR);
$statement->bindValue(':content', $content, PDO::PARAM_STR);
$statement->bindValue(':course_id', $course_id, PDO::PARAM_INT);
$result = $statement->execute();

//echo "$result";
flush();
header("Location:notes.php?course_id=$course_id");
die();

?>