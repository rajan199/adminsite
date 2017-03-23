<?php 
$id=$_REQUEST["id"];
echo $id;
$name=$_POST["txt_catname"];
echo $name;
$flag=$_POST["catstat"];
echo $flag;

$con=mysql_connect("localhost","root","");
mysql_select_db("medicine",$con);
$res=mysql_query("update category_tbl set category_name='$name',flag='$flag' where category_id='$id'");
if($res==1)
{
	header('location:category.php');
}
else
{
	echo "na";
}
?>