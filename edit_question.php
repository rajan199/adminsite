<?php 
$id=$_REQUEST["id"];

$qname=$_POST["txt_quename"];

$status=$_POST["questat"];

$ans=$_POST["que_ans"];

$con=mysql_connect("localhost","root","");
mysql_select_db("medicine",$con);
$res=mysql_query("update question_tbl set question='$qname',question_status='$status',answer='$ans' where question_id='$id'");
if($res==1)
{
	header('location:question.php');
}
else
{
	echo "na";
}
?>