<?php
  session_start();
  include('config/dbconfig.php');

 $id =$_GET['edit'];

  $updateStudent =mysqli_query($dbconnection,"select * from tbl_student where studentID =$id") or die(mysqli_erorr());

 $EditStudent=mysqli_fetch_array($updateStudent);
 
 if(isset($_POST['submit'])){
    $studentname =$_POST['studentname'];
    $registrationNo=$_POST['registrationNo'];
    $Address =$_POST['address'];
    $Email=$_POST['email'];
    $telephone =$_POST['telephone'];

    $query =mysqli_query($dbconnection,"update tbl_student set Name='$studentname',RegistrationNo='$registrationNo',address='$Address',email='$Email',TelephoneNo='$telephone' where studentID=$id") or die(mysqli_error());
    if($query){
        header("location:Student.php");
    }
}

 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">  

  <?php include ('includes/header.php'); ?>

  <?php include('includes/sidebar.php'); ?>

  <div class="content-wrapper">
  

	



    <!-- <div class="alert alert-danger" id="error" style="display:none;"> 
    This Gollege Name already exist
    </div>

    <div class="alert alert-success" id="success" style="display:none;"> 
        Record are Inserted Successfully
    </div> -->
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post"  action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="student_Name">Student Name</label>
                    <input type="text" class="form-control" id="studentName" name="studentname" placeholder="student Name" required="required" value="<?php echo  $EditStudent['Name']?>" >
                  </div>
                  <div class="form-group">
                    <label for="coursecode">Regisrtration Number</label>
                    <input type="text" class="form-control" id="RegisrtrationNo" name="registrationNo" placeholder="Registration Number" required="required" value="<?php echo $EditStudent['RegistrationNo']?>">
                  </div>
                  <div class="form-group">
                    <label for="CoURSE_Name">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="required" value="<?php echo  $EditStudent['address']?>">
                  </div>
                  <div class="form-group">
                    <label for="coursecode">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required" value="<?php echo  $EditStudent['email']?>">
                  </div>
                  <div class="form-group">
                    <label for="CoURSE_Name">Telephone Number</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone" required="required" value="<?php echo  $EditStudent['TelephoneNo']?>">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Student Id" required="required" value="<?php echo  $EditStudent['studentID']?>">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
  </div>
  
  <!-- /.content-wrapper -->
  <?php include ('includes/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
