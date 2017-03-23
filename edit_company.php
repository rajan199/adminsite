<?php 
$id=$_REQUEST["id"];

$name=$_POST["txt_comname"];

$address=$_POST["txt_comadd"];

$cno=$_POST["txt_comnumber"];

$con=mysql_connect("localhost","root","");
mysql_select_db("medicine",$con);
$res=mysql_query("update company_tbl set company_name='$name',address='$address',contact_number='$cno' where company_id='$id'");
if($res==1)
{
	header('location:company.php');
}
else
{
	echo "na";
}
?>