        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="dashboard.php">Administrator</a>
            </div>

            <div class="notifications-wrapper">
            <ul class="nav">       
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-users"></i></a>
                    <ul class="dropdown-menu dropdown-user">
                       <!--  <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a> -->
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
	
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <h3 style="color: #f1f1f1f1;"><?php echo $_SESSION["a_name"]; ?></h3>
                        </div>
                    </li>
                    <li>
                        <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home "></i>Resources<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_resources.php"></i>Add Resources</a>
                            </li>
                             <li>
                                <a href="manage_resources.php"></i>Manage Resources</a>
                            </li>                         
                        </ul>
                    </li> 
                    <li>
                        <a href="users.php"><i class="fa fa-users"></i>Users</a>
                        <a href="booking.php"><i class="fa fa-ticket"></i>Booking Details</a>
                    </li>  
					 <li>
					<a href="#"><i class="fa fa-users "></i>Lawyers<span class="fa arrow"></span></a>						
						<ul class="nav nav-second-level">
                            <li>
                                <a href="lawyer.php"></i>Add Lawyer</a>
                            </li>
                             <li>
                                <a href="manage_lawyer.php"></i>Manage Lawyer</a>
                            </li>                         
                        </ul>
						
                    </li> 					
                </ul>
            </div>

        </nav>