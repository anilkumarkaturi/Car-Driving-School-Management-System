<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
<?php
$uid=$_SESSION['cdsmseid'];
$ret=mysqli_query($con,"select emp_fname from employee where emp_id='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['emp_fname']

?>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php"><?php echo $name; ?></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard1.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!--<li class="active">
                        <a href="apply.php"> <i class="menu-icon fa fa-tasks"></i>Apply </a>
                    </li>-->
                    <!--<li class="active">
                        <a href="history-application1.php"> <i class="menu-icon fa fa-tasks"></i></i>List of users </a>
                    </li>-->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Application</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-file-o"></i><a href="new-application1.php">New</a></li>
                            <li><i class="menu-icon fa fa-file-o"></i><a href="approved-application1.php">Approved</a></li>
                            <!--<li><i class="menu-icon fa fa-file-o"></i><a href="cancelled-application1.php">Completed</a></li>-->
                            <!--<li><i class="menu-icon fa fa-file-o"></i><a href="all-application.php">All</a></li>-->
                        </ul>
                    </li>
                    <!--<li class="active">
                        <a href="drivers.php"> <i class="menu-icon fa fa-tasks"></i></i>Driver Details </a>
                    </li>-->



                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>