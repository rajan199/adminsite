<?php

$mail=$_REQUEST["id"];
$con=mysql_connect('localhost','root','');
mysql_select_db('racipe_database',$con);
$res=mysql_query("delete from user_tbl where email_id='$mail'",$con);

if($res==1)
{
	header('location:userdata.php');
}
else
{
	echo "not deleted";
}

?>

