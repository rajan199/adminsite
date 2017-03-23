<?php
  $id=$_REQUEST["id"];
 // echo $id;
						$con=mysql_connect("localhost","root","");
                        mysql_select_db("medicine",$con);
                        $res=mysql_query("delete from product_tbl where product_id='$id'",$con);
						header('location:product.php');
?>