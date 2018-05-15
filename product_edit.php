<?php
session_start();


if($_SESSION["emailid"]=="")
{
	header('location:index.php');
}



?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Recipe Express</title>
  <!-- Tell the browser to be responsive to screen width -->
 <?php
  include 'links.php';
  
  ?>
  
  
  <script>



function prize(uzip)
{
		var numbers=/^[0-9]+$/;
		var len=uzip.value.length;
		if(uzip.value.match(numbers))
		{
			return true;
		}
		else
		{
				alert('Product Prize must have numeric characters only');
				uzip.focus();
				uzip.value = " ";				
				
				return false;
				
		}
}



</script>  
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php

include 'header.php';

?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <aside class="main-sidebar">
   
    <section class="sidebar">
     
      <ul class="sidebar-menu">
      
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
        <li class="active"><a href="userdata.php"><i class="fa fa-circle-o"></i> User Table</a></li>
            <li class="active"><a href="recipe.php"><i class="fa fa-circle-o"></i> Recipe Table</a></li>
			 <li class="active"><a href="order.php"><i class="fa fa-circle-o"></i> Order Table</a></li>
			 <li class="active"><a href="question.php"><i class="fa fa-circle-o"></i> Question Table</a></li>
			  <li class="active"><a href="favourite.php"><i class="fa fa-circle-o"></i> Favourite Table</a></li>
			 <li class="active"><a href="feedback.php"><i class="fa fa-circle-o"></i> FeedBack Table</a></li>
			  </ul>
        </li>
		

    </section>
    
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
			

<div class="box box-primary">
            <div class="box-header with-border">
              <h1>Edit Form of Products</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
				  

		  <form method="post" action="" role="form" enctype="multipart/form-data">
             
	<?php 
			$id=$_REQUEST["id"];
			 $con=mysql_connect("localhost","root","");
                        mysql_select_db("racipe_database",$con);
                        $res=mysql_query("select * from racipe_tbl where racipe_id='$id'");
						while($row=mysql_fetch_array($res,MYSQL_ASSOC))
                        {
							//$catid=$row["category_id"];
							$name=$row["racipe_name"];
							$img=$row["racipe_img"];
							$photo=substr($img,9);
 
							$price=$row["racipe_price"];
							$ing=$row["racipe_ingredient"];
							$method=$row["method"];
							$stat=$row["status"];
							
						}
			?>
              
  <?php
           
            
			$id1=$_REQUEST["id"];
			 
            if(isset($_POST["edit_prod"]))
            {

					$name1=$_POST["txt_name"];
				  $price1=$_POST["txt_pri"];
			  $stat1=$_POST["txt_sta"];
			  $ing1=$_POST["txt_ing"];
			  
			  $method1=$_POST["txt_method"];
			 
			  $photo=$img;
			            if($_FILES["txt_img"]["name"]!="")
                            {
                                unlink($img);
                                $photo="../images/".basename($_FILES["txt_img"]["name"]);

                                move_uploaded_file($_FILES["txt_img"]["tmp_name"],$photo);
                                
                            }   

						$con=mysql_connect("localhost","root","");
                        mysql_select_db("racipe_database",$con);
                        $res=mysql_query("update racipe_tbl set racipe_name='$name1',racipe_img='$photo',racipe_ingredient='$ing1',method='$method1',racipe_price='$price1',status='$stat1' where racipe_id='$id1'",$con);
			
            if($res==1)
			{
				header('location:recipe.php');
			}
			
			
            }
        ?>
    		 <div class="box-body">
                <div class="form-group">
                  <label >Racipe Name</label>
                  <input type="text" class="form-control" value="<?php echo $name; ?>" name="txt_name" placeholder="Enter Recipe Name" style="width: 550px; height: 40px;" required>
                </div>
				<div class="form-group">
                  <label > Image of Racipe</label>
<img src="<?php echo $img;?>"  class="form-control" style="height: 133px; width: 180px;">

			   
				 <input type="file" class="form-control" name="txt_img" value="<?php echo $img; ?>" style="width: 550px; height: 40px;" >
                </div>


				 <div class="form-group">
                  <label >Racipe Ingredient</label>
                  <input type="text" class="form-control" value="<?php echo $ing; ?>" name="txt_ing" placeholder="Enter Ingredients" style="width: 550px; height: 40px;" required>
                </div>
				
				
				
				 <div class="form-group">
                  <label >Method</label>
                  <input type="text" class="form-control" value="<?php echo $method; ?>" name="txt_method" placeholder="Enter Ingredients" style="width: 550px; height: 40px;" required>
                </div>
				
				<div class="form-group">
                  <label>Racipe Price</label>
                  <input type="text" class="form-control" onblur="return prize(txt_pri);" value="<?php echo $price; ?>" name="txt_pri" placeholder="Enter Product Price" style="width: 550px; height: 40px;" required>
                </div>

			<div class="form-group">
                  <label >Select the Status of Racipe</label>

				<select name="txt_sta" class="form-control" autocomplete="off" style="width: 550px; height: 40px;" required>

				<option value="available" <?php if($stat=="available") echo 'selected';?>>Available</option>
				<option value="not available" <?php if($stat=="not available") echo 'selected';?>>Not Available</option>



</select>                 
				 </div>
				
				
			
	
		        
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit_prod">Update</button>
              </div>
			  
            </form>
          </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright @Recipe Express <a href="http://almsaeedstudio.com"> </a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php
	include 'link1.php';
?>

<script>
  $(function () {
    $("#example").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
