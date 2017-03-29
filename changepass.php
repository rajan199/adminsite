<?php
session_start();
?>

<?php
$email=$_SESSION["emailid"];
$pass1=$_POST["txtold"];
$pass2=$_POST["txtnew"];
$pass3=$_POST["txtnewre"];

$con=mysql_connect('localhost','root','');
mysql_select_db('medicine',$con);
$res=mysql_query("select * from user_tbl where email_id='$email'",$con);
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
  $pass=$row["password"];
}

if($pass==$pass1)
{
	if($pass2==$pass3)
	{
		$con=mysql_connect('localhost','root',''); 
        mysql_select_db('medicine',$con);
		$res=mysql_query("update user_tbl set password='$pass2' where email_id='$email'",$con);
		
		if($res==1)
		{
			header('location:home.php');
		}
	
	}
	else
	{
	//	echo "retype new password";
		echo '<script type="text/javascript">';
 echo "alert('please Re type new password');";
 echo "window.location = 'changepassword.php';";
   echo "</script>";

	
	}
}

else
{
//	echo "old password is wrong";
	echo '<script type="text/javascript">';
 echo "alert('Old password is wrong');";
 echo "window.location = 'changepassword.php';";
   echo "</script>";


}
?>