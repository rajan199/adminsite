<?php
  $id=$_REQUEST["id"];
  echo $id;
  $con=mysql_connect("localhost","root","");
                        mysql_select_db("medicine",$con);
                        $res=mysql_query("delete from company_tbl where company_id='$id'");
  header('location:company.php');
?>