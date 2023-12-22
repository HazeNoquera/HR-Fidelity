<?php 
  if(!isset($_SESSION))
  {
      session_start();
  }

    if($_SESSION['superadmin_name'] == "" ) 
    {
        header("Location: /HR-Fidelity/Login.php");
    }

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR Fidelity</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="https://kit.fontawesome.com/ff86b34ee8.js" crossorigin="anonymous"></script>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="indexSuperadmin.php" class="brand-link">
      <img src="hr.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HR-Fidelity</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="user (3).png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="indexSuperadmin.php" class="d-block"><?php echo $_SESSION["superadmin_name"] ?>
          <br>
          <span class ="font-weight-light"> Super Admin </span></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="indexSuperadmin.php" class="nav-link active">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
              <p>
                Manage Super Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages(1)/Manage_HR.php" class="nav-link in-active">
            <i class="fa fa-user" aria-hidden="true"></i>
              <p>
              Manage HR
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Login.php" class="nav-link in-active">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
              <p>
              Log-Out
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
          
        <section class="content">
      <div class="container-fluid" >
        <div class="row">
          <div class="col-12" >
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Super Admin Information</h3>
                <div class="float-right">
                  <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-add-new"><i class="fas fa-user-plus"></i> Add Super Admin</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width = "5%">No.</th>
                    <th width = "20%">Name</th>
                    <th width = "10%">Username</th>
                    <th width = "10%">Status</th>
                    <th width = "40%"></th>

                  </tr>
                  </thead>
                  <tbody>

                <?php
                require 'connection.php';
                $super_admin = $_SESSION["superadmin_name"];
                $sql = "SELECT * FROM tbl_superadmin where NOT superadmin_name = '$super_admin'";
                $result = mysqli_query($conn, $sql);

                  ?>  

                  <?php
                  if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) { ?>
                      <tr id = <?php echo $row["superadmin_id"]; ?>>
                        <td><?php echo $i; ?></td>
                        <td  data-name = "<?php echo $row["superadmin_name"] ?>" ><?php echo $row["superadmin_name"]; ?></td>
                        <td data-Username = "<?php echo $row["superadmin_username"] ?>" ><?php echo $row["superadmin_username"]; ?></td>
                        <td>
                          <?php
                            if($row["status"])
                            {
                              echo '<span class="badge badge-success">Active</span>';
                            }
                            else
                            {
                              echo '<span class="badge badge-danger">Inactive</span>';
                            }
                          ?>
                        </td>
                        <td>
                          <?php
                            if($row["status"])
                            { ?>
                              <button class="btn btn-primary btn-sm btn-deactivate" style = "width: 100px;"><i class="fas fa-user-slash"></i>Deactivate</button>
                            <?php
                            }
                            else
                            { ?>
                              <button class="btn btn-primary btn-sm btn-activate" style = "width: 100px;"><i class="fas fa-user-check"></i>Activate</button>
                        <?php
                           }
                          ?>
                          <button class="btn btn-info btn-sm btn-edit">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </button>
                          <button class="btn btn-danger btn-sm btn-delete">
                              <i class="fas fa-trash"></i>
                              Delete
                          </button>
                        </td>
                      </tr>
                    <?php $i++; }
                  }
                  ?>
              

              <form id = "form_new">
            <div class="modal fade" id="modal-add-new">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New Super Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="type" id="type" value = "insert">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="Super_Admin_Name" id="Super_Admin_Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="Super_Admin_Username"  id="Super_Admin_Username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="Super_Admin_Password" id="Super_Admin_Password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" class="form-control" name="Confirm_Super_Admin_Password" id="Confirm_Super_Admin_Password" placeholder="Confirm Password">
                    </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id = "btnAddNewRecord" value = "Add New Record">
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            </div>
            </form>


            <form id = "form_edit">
          <div class="modal fade edit" id="modal-edit-administrator">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Super Admin</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="type" id="type" value = "edit">
                  <input type="hidden" name="edit_superadmin_id" id="edit_superadmin_id">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="edit_Super_Admin_Name" id="edit_Super_Admin_Name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="edit_Super_Admin_Username"  id="edit_Super_Admin_Username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="edit_Super_Admin_Password" id="edit_Super_Admin_Password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_edit_Super_Admin_Password" id="confirm_edit_Super_Admin_Password" placeholder= "Confirm Password">
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" id = "btnEditRecord" value = "Update Record">
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
      </form>


            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
            <!-- Toastr -->
            <script src="plugins/toastr/toastr.min.js"></script>

            <!-- AdminLTE -->
            <script src="dist/js/adminlte.js"></script>

            <!-- OPTIONAL SCRIPTS -->
            <script src="plugins/chart.js/Chart.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="dist/js/pages/dashboard3.js"></script>


            
            </section>
          </div>
        </div><!-- /.row -->  
        
</div>

<script type="text/javascript">
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  });
  </script>
<script type="text/javascript">
$(document).ready(function() {
$("#form_new").submit(function(event) {
  event.preventDefault(); //prevent submit
  var form = $(this);
  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
    
    $.ajax({
        type: "POST",
        cache: false,
        url: 'pages(1)/Process/Process_Manage_SuperAdmin.php',
        data: form.serialize(),
        success:function(data){
          var response_data = JSON.parse(data);
          Toast.fire({
          icon: response_data.icon,
          title: response_data.message
        });
   
        if(response_data.icon == 'success')
        {
          setTimeout(function(){location.reload();},2000);
        }

        }
    });
  
  }
);

$("#form_edit").submit(function(event) {
  event.preventDefault(); //prevent submit
  var form = $(this);

  var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });


    $.ajax({
        type: "POST",
        cache: false,
        url: 'pages(1)/Process/Process_Manage_SuperAdmin.php',
        data: form.serialize(),
        success:function(data){
          var response_data = JSON.parse(data);
          Toast.fire({
          icon: response_data.icon,
          title: response_data.message
        });

        if(response_data.icon == 'success')
        {
          setTimeout(function(){location.reload();},2000);

        }

        }
    });
  } 

);


$('#example1 tbody').on('click', '.btn-activate', function () {

  var edit_superadmin_id = $(this).closest("tr").attr('id');

  var $status = $(this).closest("tr").children(":eq(4)");
var $actions = $(this).closest("tr").children(":eq(5)");
  Swal.fire({
  title: 'Are you sure?',
  text: "You want to Activate",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Activate it!'
}).then((result) => {
  if (result.isConfirmed) 
  {$.ajax({
        type: "POST",
        cache: false,
        url: 'pages(1)/Process/Process_Manage_SuperAdmin.php',
        data: {type:'activate',edit_superadmin_id:edit_superadmin_id},
        success:function(data){
          var response_data = JSON.parse(data);

          if(response_data.title == 'Success')
          {
            $status.html('<span class="badge badge-success">Active</span>');
            $actions.html($actions.html().toString().replace('btn-activate','btn-deactivate').replace('fas fa-user-check', 'fas fa-user-slash').replace('Activate', 'Deactivate'));
            Swal.fire(
              'Activated',
              'Department has been Activated.',
              'success'
            )
          }

        }
      })
    }
    });

});

$('#example1 tbody').on('click', '.btn-deactivate', function () {

var edit_superadmin_id = $(this).closest("tr").attr('id');

var $status = $(this).closest("tr").children(":eq(4)");
var $actions = $(this).closest("tr").children(":eq(5)");

Swal.fire({
  title: 'Are you sure?',
  text: "You want to Deativate",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Deativate it!'
}).then((result) => {
  if (result.isConfirmed) {


$.ajax({
      type: "POST",
      cache: false,
      url: 'pages(1)/Process/Process_Manage_SuperAdmin.php',
      data: {type:'deactivate',edit_superadmin_id:edit_superadmin_id},
      success:function(data){
        var response_data = JSON.parse(data);
        

      if(response_data.title == 'Success')
      {
        $status.html('<span class="badge badge-danger">Inactive</span>');
        $actions.html($actions.html().toString().replace('btn-deactivate','btn-activate').replace('fas fa-user-slash', 'fas fa-user-check').replace('Deactivate', 'Activate'));
        Swal.fire(
              'Deactivated',
              'Department has been Deactivated.',
              'success'
            )
      }


      }
    })
  }
  });

});


$('#example1 tbody').on('click', '.btn-edit', function () {

document.getElementById("edit_superadmin_id").value = $(this).closest("tr").attr('id');
document.getElementById("edit_Super_Admin_Name").value = $(this).closest("tr").children(":eq(1)").text();
document.getElementById("edit_Super_Admin_Username").value = $(this).closest("tr").children(":eq(2)").text();

$('#modal-edit-administrator').modal('show');


});

$('#example1 tbody').on('click', '.btn-delete', function () {

var edit_superadmin_id = $(this).closest("tr").attr('id');
var $administrator_row = $(this).closest("tr");

Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
          type: "POST",
          cache: false,
          url: 'pages(1)/Process/Process_Manage_SuperAdmin.php',
          data: {type:'delete',edit_superadmin_id:edit_superadmin_id},
          success:function(data){

          var response_data = JSON.parse(data);

          if(response_data.icon == 'success')
          {
            $administrator_row.remove();

            Swal.fire(
              'Deleted!',
              'Super Admin has been deleted.',
              'success'
            )
            setTimeout(function(){location.reload();},2000);
          }

          }
      });
  }
})



});
});

</script>
</body>
</html>
