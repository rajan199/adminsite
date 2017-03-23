<header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>JM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Jay Jalaram</b>Medicine</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
	  

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		
		
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">Manage Profile</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Body -->
               <?php
			  
			  $eid=$_SESSION["emailid"];
			  
			  ?>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="manageadminprofile.php?id=<?php echo $eid;?>" class="btn btn-default btn-flat">View Profile</a>

                </div>
				
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>	
    </nav>
  </header>
 