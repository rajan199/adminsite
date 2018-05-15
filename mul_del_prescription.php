<?php
			 
			 
			 if(isset($_POST["delete"]))
			 {
				 
				 
				 if(Empty($_POST["chk"]))
						  {
							 echo '<script type="text/javascript">';
 echo "alert('Please select atleast one record');";
 echo "window.location = 'data.php';";

 echo "</script>"; 

							  
						  }
						  else{
				 $con=mysql_connect("localhost","root","");
                        mysql_select_db("medicine",$con);
				 $idArr = $_POST['chk'];
                        
				 foreach($idArr as $id)
				 {
				//	 echo $id;
//$query="delete from user_tbl where email_id=".$id;					 	
						$res=mysql_query("delete from prescription_tbl where prescription_id='$id'",$con);
 
				
				 }
				 if($res==1){
					 header('location:data.php');

				 }
			 }
			 }
			 ?>
			 