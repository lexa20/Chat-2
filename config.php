<?
if(!isset($dbh)){
	session_start();
	date_default_timezone_set("UTC");
	$musername = "root";
	$mpassword = "";
	$hostname  = "localhost";
	$dbname    = "test";
	$dbh=new PDO('mysql:dbname='.$dbname.';host='.$hostname.";port=3306",$musername, $mpassword);
	include("user_online.php");
}
?>