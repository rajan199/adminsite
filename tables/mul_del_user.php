<?php
			 
			 
			 if(isset($_POST["delete"]))
			 {
				 
				 $con=mysql_connect("localhost","root","");
                        mysql_select_db("medicine",$con);
				 $idArr = $_POST['chk'];
                        
				 foreach($idArr as $id)
				 {
				//	 echo $id;
//$query="delete from user_tbl where email_id=".$id;					 	
						$res=mysql_query("delete from user_tbl where email_id='$id'",$con);
 echo "sdasdasd".$res;
				
				 }
				 if($res==1){
					 header('location:userdata.php');
				 }
			 }
			 
			 ?>
			 