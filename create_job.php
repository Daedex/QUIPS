<?php
header('Location: http://localhost/quips/create_job.html');
$job_id = mysql_real_escape_string($_POST["job_id"]);
$job_name = mysql_real_escape_string($_POST["job_name"]);
$Database = "quips";
mysql_connect("localhost", "root", "Quips321") or die(mysql_error());
mysql_select_db($Database) or die(mysql_error());
$insert = "INSERT INTO jobs (job_name)
	       VALUES ('$job_name')"; 
mysql_query($insert); 
?>