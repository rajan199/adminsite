<?php

$id=$_REQUEST["id"];
$con=mysql_connect('localhost','root','');
mysql_select_db('medicine',$con);
$res=mysql_query("delete from question_tbl where question_id='$id'",$con);

if($res==1)
{
	header('location:question.php');
}
else
{
	echo "no idea sirji";
}

?>

