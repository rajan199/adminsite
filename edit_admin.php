<?php 
$id=$_REQUEST["id"];

$name=$_POST["txt_comid"];

$pass=$_POST["txt_com"];


$con=mysql_connect("localhost","root","");
mysql_select_db("medicine",$con);
$res=mysql_query("update user_tbl set user_name='$name',password='$pass' where email_id='$id'");
if($res==1)
{
	header('location:home.php');
}
else
{
	echo "not updated";
}
?>