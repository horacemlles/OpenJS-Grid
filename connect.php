<?php
	$host = "localhost";
	$dbname = "cmi_test";
	$user = "root";
	$password = "";
	$charset = "utf8";
//	$pdo = new PDO("mysql:dbname=$dbname;host=$host", $user , $password);
	try 
	{
			$db = new PDO("mysql:dbname=$dbname;host=$host", $user , $password);
	}
    catch(PDOException $ex)    {
    echo $ex->getMessage();
	
	}
	
?>
