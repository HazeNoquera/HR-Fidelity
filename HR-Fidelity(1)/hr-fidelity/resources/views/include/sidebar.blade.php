<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HR-Fidelity</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
            <a href="http://localhost:8000/Home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item" >
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Manage Employee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="http://localhost:8000/Department" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Employee_Manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Termination" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Warning</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Employee_Permanent" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Termination</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Employee_Permanent" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Permanent</small></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Leave Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Setup
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Manage_Holiday"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Holiday</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Public_Holiday" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Public Holiday</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Leave_Type" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Leave_Configure" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave Configure</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Leave Application
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Apply_Leave" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Apply Leave</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Public_Holiday" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Public Holiday</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Leave information
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Leave_Report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Summary_Report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/My_Leave_Report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MyLeave Report</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Attendance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Setup
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Manage_Work_shift" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Work shift</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Daily_attendance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily Attendance</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="http://localhost:8000/Monthly_Attendance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Attendance</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="http://localhost:8000/My_attendance_Report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Attendance Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="http://localhost:8000/Summary_Report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary Report</p>
                </a>
              </li>
            </ul>
          </li>

              <li class="nav-item">
                <a href="http://localhost:8000/Manual_Attendance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manual Attendance</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Payroll
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Setup
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Tax_Rule_Setup"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tax Rule Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Late_Configuration"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Late Configuration</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Allowance"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Allowance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Deduction"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deduction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Monthly_Pay_Grade"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Pay Grade</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/Salary_Sheet_Generation"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary Sheet Generation</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Payment_History"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Payment History</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="http://localhost:8000/My_Payroll"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Payroll</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Work Hours
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Approve_Work_Hours"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Approve Work Hours</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="http://localhost:8000/Manage_My_Payroll"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Payroll</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Bonus
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/Generate"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Generate Bonus</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="http://localhost:8000/Manage_Admins" class="nav-link in-active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Manage Admins
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="http://localhost:8000/Login" class="nav-link in-active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
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


</div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
