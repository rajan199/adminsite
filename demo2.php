<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jay Jalaram Medicine</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <!--<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style 
    <link href="build/css/custom.min.css" rel="stylesheet">
  -->
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript">
  
     function del()
      {
        return confirm("Are you sure you want to delete this User?");
      }

	  function edit()
      {
        return confirm("Are you sure you want to Edit this catagory?");
      }

  
  </script>

  
  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="background: white;">

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
            <li class="active"><a href="category.php"><i class="fa fa-circle-o"></i> Category Table</a></li>
			 <li class="active"><a href="question.php"><i class="fa fa-circle-o"></i> Question Table</a></li>
			 <li class="active"><a href="data.php"><i class="fa fa-circle-o"></i> Prescription Table</a></li>
			  <li class="active"><a href="company.php"><i class="fa fa-circle-o"></i> Company Table</a></li>
			  <li class="active"><a href="favourite.php"><i class="fa fa-circle-o"></i> Favourite Table</a></li>
			  <li class="active"><a href="feedback.php"><i class="fa fa-circle-o"></i> FeedBack Table</a></li>
			  <li class="active"><a href="order.php"><i class="fa fa-circle-o"></i> Order Table</a></li>
			  <li class="active"><a href="product.php"><i class="fa fa-circle-o"></i> Product Table</a></li>
          </ul>
        </li>
    </section>
    
  </aside>


  <!-- Content Wrapper. Contains page content -->
 
 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="width: 1089px; background: white; margin-left: 231px; margin-top: 51px;">
                  <div class="x_title">
                    <h2 align="center"><b>Per day Sales Report</b></h2>
                   <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>-->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable-buttons" style=""  class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Order Date</th>
                  
			      <th>Email Id</th>
				  
				  <th>Product Name</th>
				  <th>Product Price</th>
				  <th>Quantity</th>
				 <th>Address</th>
				 
				  <th>Total Price</th>
				 	
					
					</tr>
                      </thead>


                      <tbody>
                        
<?php 
				
				 $con=mysql_connect("localhost","root","");
                        mysql_select_db("medicine",$con);
						
						      $date=date("d/m/y");
			
			$arr=explode("/",$date);
			$m1=(int)$arr[1];
			
						
                        $res=mysql_query("select u.*,p.*,o.* from user_tbl as u,order_tbl as o,product_tbl as p where p.product_id=o.product_id and u.email_id=o.email_id and o.status='buy' and MONTH(o.order_date)='$m1' order by o.order_id desc ",$con);
						$cnt=mysql_num_rows($res);             
			 while($row=mysql_fetch_array($res,MYSQL_ASSOC))
                        {
                          
						echo '<tr>';	
						  echo '<td>'.$row["order_date"].'</td>';
						  echo '<td>'.$row["email_id"].'</td>';
						  echo '<td>'.$row["product_name"].'</td>';
						  echo '<td>'.$row["product_price"].'</td>';
						  echo '<td>'.$row["quantity"].'</td>';
							echo '<td>'.$row["ship_address"].'</td>';
								
				echo '<td>'.$row["total_price"].'</td>';
					
					echo '</tr>';
						  }
				?>

						</tbody>
                    </table>
                  </div>
                </div>
              </div>
 
 
 
 
 
 
  <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

 
 
</body>
</html>
