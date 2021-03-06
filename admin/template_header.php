<?php
$user = $_SESSION['admin_manager'];
 ?>     
	 <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>HG</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Hightin Global LTD</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
            
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="images/avatar.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $user ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="images/avatar.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $user ?> - Hightin Global LTD
                      
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                   <div class="pull-left">
                      <a href="account.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="images/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $user ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href="all_articles.php">
			    <?php
			 include_once('../storescripts/connect_to_mysql.php');
				$shop_article = mysqli_query($conn,"select * from articles") or die(mysqli_error($conn));
				$articleCount = mysqli_affected_rows($conn);
				 // count the output amount
			  ?>
                <i class="fa fa-th"></i> <span> View all Articles</span> <small class="label pull-right bg-green"><?php echo $articleCount ?></small>
              </a>
            </li>
            
			 <li>
              <a href="all_cards.php">
			    <?php
				$card_products = mysqli_query($conn,"select * from cards") or die(mysqli_error($conn));
				$cardCount = mysqli_affected_rows($conn);
				 // count the output amount
			  ?>
                <i class="fa fa-th"></i> <span> View all Cards</span> <small class="label pull-right bg-green"><?php echo $cardCount ?></small>
              </a>
            </li>
			<li>
              <a href="all_products.php">
			    <?php
			 include_once('../storescripts/connect_to_mysql.php');
				$shop_products = mysqli_query($conn,"select * from products") or die(mysqli_error($conn));
				$productCount = mysqli_affected_rows($conn);
				 // count the output amount
			  ?>
                <i class="fa fa-th"></i> <span> View all Products</span> <small class="label pull-right bg-green"><?php echo $productCount ?></small>
              </a>
            </li>
			 <li>
              <a href="new_user.php">
                <i class="fa fa-user"></i> <span> Add new user</span>
              </a>
            </li>
            
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>