<?php

$mail=$_REQUEST["id"];
$con=mysql_connect('localhost','root','');
mysql_select_db('medicine',$con);
$res=mysql_query("delete from feedback_tbl where email_id='$mail'",$con);

if($res==1)
{
	header('location:feedback.php');
}
else
{
	echo "no idea sirji";
}

?>
