<?php
include "connection.php";

//get user input from GET / POST method
/*
echo "<pre>";
print_r($_POST);
var_export($_POST);
echo "</pre>";
*/

$data= $_POST;

$submit = $data['submit'];

if ($submit) {
 
$name = $data['name'];
$description = $data['description'];
$full_marks = $data['full_marks'];
$pass_marks = $data['pass_marks'];
$start_time = $data['start_time'];
$end_time = $data['end_time'];
$date = $data['date'];
$course_id = $data['course'];
$created_at = time();

//server side validation of input data

//build query
$sql = "INSERT INTO `exam` (`id`, `name`, `description`, `full_marks`, `pass_marks`, `start_time`, `end_time`, `date`, `course_id`, `created_at`) 
			        VALUES (NULL, \"$name\", \"$description\", \"$full_marks\", \"$pass_marks\", \"$start_time\", \"$end_time\", \"$date\", \"$course_id\", $created_at);";

mysql_query	($sql);				

header ("Location: ../exam.php");

}	
						
			
?>