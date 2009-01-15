<?php

$dbhost = "";
$dbuser = "";
$dbpass = "";
$dbname = "";

$author = $_REQUEST['userkey'];
$message = $_REQUEST['msg'];

switch ($message) {
    case "!get":
		mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db($dbname);
		$sql="SELECT * FROM `todos` WHERE author LIKE '$author'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		if($count==0){
			echo "You have no todos!";
		}
		else{	
		while ($row = mysql_fetch_array($result))
		{
			$item = $row['todo'];
			echo "$item - ";
		}}
        break;
	default:
		mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db($dbname);
		$sql2="INSERT INTO `todos` VALUES ('NULL','$message','$author')";
		$result2=mysql_query($sql2);
		if (!$result2){
			echo "Sorry, there was an error.";
		}
		else{
			echo "Your todo was added!";
		}
        break;
}

?>