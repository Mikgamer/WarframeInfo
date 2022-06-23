<?php
$connection = mysqli_connect("NOTHINGTOSEE", "NOTHINGTOSEE", "NOTHINGTOSEE", "NOTHINGTOSEE");
if (!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
?>