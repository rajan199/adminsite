<?php 
$id=$_REQUEST["id"];

$name=$_POST["txt_comid"];

$add=$_POST["txtadd"];

$area=$_POST["txtcity"];

$zip=$_POST["txt_zip"];

$mno=$_POST["txt_mob"];

$gen=$_POST["txt_gen"];

$con=mysql_connect("localhost","root","");
mysql_select_db("medicine",$con);
$res=mysql_query("update user_tbl set user_name='$name',address='$add',area='$area',zipcode='$zip',mobile_no='$mno',gender='$gen' where email_id='$id'");
if($res==1)
{
	header('location:home.php');
}
else
{
	echo "not updated";
}
?>