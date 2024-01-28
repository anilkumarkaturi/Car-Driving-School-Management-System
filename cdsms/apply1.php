<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDSMS Application Form</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../admin/vendors//bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/vendors//font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/vendors//themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/vendors//flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/vendors//selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../admin/assets//css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Application Form</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="apply.php">Application Form</a></li>
                            <li class="active">Submit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Application</strong><small> Form</small></div>
                            <form name="package" method="post" enctype="multipart/form-data">
                               
                            <div class="card-body card-block">

  <div class="col-lg-6">
<div class="form-group">
    <label for="city" class=" form-control-label">Taken For</label>
<select type="text" name="takenfor" id="takenfor" required="true" class="form-control">
<option value="">Select</option>
<option value="Family Member">Family Member</option>
<option value="Myself">Myself</option>
</select>
</div>
<div class="form-group" id="contactdetail">
<p style="padding-top: 30px; font-size: 15px"><strong>Family Member Details</strong></p>
                                              

        <div class="form-group">
            <label for="city" class=" form-control-label">Family member Name</label>
            <input type="text" name="fullname" placeholder="Family member Name" id="fullname" class="form-control">
        </div>  
   
   <div class="form-group">
    <label for="city" class=" form-control-label">Family member Email</label>
    <input type="text" class="form-control" name="email" placeholder="Family member Email" id="email" >
</div>

<div class="form-group">
    <label for="city" class=" form-control-label">Family member Mobile Number</label>
    <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Family member Phone" maxlength="10" pattern="[0-9]{10}" class="form-control">
</div>
</div>  
                                            
<div class="row form-group">
<div class="col-12">
<div class="form-group">
    <label for="city" class=" form-control-label">Gender</label>
    <select type="text" name="gender" placeholder="Your Name" required="true" class="form-control">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Transgender">Transgender</option>
                                                    </select>
                                                </div>
                                                   

 <div class="form-group">
    <label for="city" class=" form-control-label">Age</label>
    <input type="text" name="age" placeholder="Age" required="true" maxlength="2" class="form-control">

</div>
                                                    
<div class="form-group">
    <label for="city" class=" form-control-label">LicenceNumber</label>
    <input type="text" name="licno" placeholder="Licence Number" required="true" maxlength="15" class="form-control">
</div>
                                                    
            <div class="form-group"><label for="city" class=" form-control-label">Upload Licence</label><input type="file" name="licpic" required="true" class="form-control"></div>
                                                    <div class="form-group"><label for="city" class=" form-control-label">Your Address</label><textarea name="address" id="address" placeholder="Your Address" required="true" class="form-control"></textarea></div>
                                                    <div class="form-group"><label for="city" class=" form-control-label">Alternate Number</label><input type="text" name="altnumber" placeholder="Alternate Number" required="true" maxlength="10" class="form-control"></div>
                                                    </div>
                                                    <div>
                                                    </div>
                                                   
                                                        
                                                    </div>
                                                    </div>

  <div class="col-lg-6">
                                <div class="form-group"><label for="company" class=" form-control-label">Packages</label><select name="packages" id="packages" required="true" class="form-control">
                                        <option value="">Select</option>
                                        <?php $query=mysqli_query($con,"select * from tblpackages");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
             
              <option value="<?php echo $row['ID'];?>"><?php echo $row['PackageName'];?></option>
                  <?php } ?> 
               </select>
           </div>
           
                                <div class="form-group"><label for="company" class=" form-control-label">Select Driver</label><select name="driver" id="driver" required="true" class="form-control">
                                        <option value="">Select</option>
                                        <?php $query=mysqli_query($con,"select * from employee");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
             
              <option value="<?php echo $row['emp_id'];?>"><?php echo $row['emp_fname'];?></option>
                  <?php } ?> 
               </select>
           </div>
     <div class="form-group">
        <label for="vat" class=" form-control-label">Training Start Date</label>
        <input type="date" id="datepicker" name="trainingdate" placeholder="Trainin Date" required="true" class="form-control">
    </div>
                                        
<div class="form-group">
    <label for="street" class=" form-control-label">Training Time</label>
    <input type="time" id="time" name="time" placeholder="Trainin Date" required="true" class="form-control">
</div>
</div>

           <div align="center">                                         
    <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i>  Apply Now
                                                        </button>
</div>


                                                    </div>
                                                    
                                                     
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
                            <script src="../admin/vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="../admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="../admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="../admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="../admin/assets/js/main.js"></script>
</body>
</html>
<script type="text/javascript">
