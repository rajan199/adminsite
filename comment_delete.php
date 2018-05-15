<?php
  $id=$_REQUEST["id"];
 // echo $id;
						$con=mysql_connect("localhost","root","");
                        mysql_select_db("racipe_database",$con);
                        $res=mysql_query("delete from comment_tbl where comment_id='$id'",$con);
						header('location:comment.php');
?>