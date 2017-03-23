  
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
	  <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        <li class="treeview">
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
            <li><a href="data.php"><i class="fa fa-circle-o"></i> Prescription Table</a></li>
			 <li><a href="company.php"><i class="fa fa-circle-o"></i> Company Table</a></li>
			  <li><a href="favourite.php"><i class="fa fa-circle-o"></i> Favourite Table</a></li>
			  <li><a href="feedback.php"><i class="fa fa-circle-o"></i> FeedBack Table</a></li>
			  <li><a href="order.php"><i class="fa fa-circle-o"></i> Order Table</a></li>
			  <li><a href="product.php"><i class="fa fa-circle-o"></i> Product Table</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <?php include 'reportslink.php'; ?>
        </li>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
