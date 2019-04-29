<?php
include "../config1.php";
session_start();
$uName = $_POST['username'];
$pWord = $_POST['password'];
$qry = "SELECT * FROM client WHERE prenom='".$uName."' and motdepasse='".$pWord."'";

$res = mysql_query($qry);
var_dump($res);
$num_row = mysql_num_rows($qry);
$row=mysql_fetch_assoc($res);

if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uname']=$row['username'];
	header('location:connecte.php');
}
else {
	echo 'false';
}
?>
