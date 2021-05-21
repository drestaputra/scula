<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Create Product | Toko Ghoib</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/custom1.css">
  <link rel="stylesheet" href="bootstrap/css/customv2.css" />
  <link rel="stylesheet" href="bootstrap/css/registrasi.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="plugins/bootstrap-slider/slider.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Tags Input -->
  <link rel="stylesheet" href="plugins/tags-input/bootstrap-tagsinput.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <style>
    .sidenav {
      height: 100%; /* 100% Full-height */
      width: 0; /* 0 width - change this with JavaScript */
      position: fixed; /* Stay in place */
      z-index: 3; /* Stay on top */
      top: 0; /* Stay at the top */
      left: 0;
      background-color: #111; /* Black*/
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 60px; /* Place content 60px from the top */
      transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
      margin-top: 20px;
    }

    #main {
      transition: margin-left .5s;
      padding: 20px;
    }

    .open-nav {
      position: absolute;
      top: 50px;
      left: 0;
      color: #f44336;
    }

    input[type="file"] {
      display: none !important;
    }
    .custom-file-upload {
      border: 1px solid #ccc;
      display: inline-block;
      padding: 6px 12px;
      cursor: pointer;
      color: #fff;
      background-color: #0098da;
      border-color: #0086c1;
    }
    .custom-file-upload:hover {
      background-color: #007cb1;
      border-color: #0086c1;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>Scula</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Sub Menu -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="order.html">Order</a></li>
              <li><a href="http://backscula.organilife.id/">Funnels</a></li>
              <li><a href="contacts.html">Contacts</a></li>
              <li><a href="report.html">Reports</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="coupons.html">Coupons</a></li>
                  <li><a href="expenses.html">Expenses</a></li>
                  <li><a href="inventory.html">Inventory</a></li>
                  <li><a href="payments.html">Payments</a></li>
                  <li><a href="logistics.html">Logistics</a></li>
                  <li><a href="team-members.html">Team Members</a></li>
                  </ul>
              </li>
              <li><a href="add-product.html" class="btn btn-sm btn-warning btn-product"><span class="material-icons md-18">add</span> Add Product</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                  <!-- Menu toggle button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="material-icons md-18">mail</span>
                      <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="header">You have 4 messages</li>
                      <li>
                          <!-- inner menu: contains the messages -->
                          <ul class="menu">
                              <li>
                                  <!-- start message -->
                                  <a href="#">
                                      <div class="pull-left">
                                          <!-- User Image -->
                                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                      </div>
                                      <!-- Message title and timestamp -->
                                      <h4>
                                          Support Team
                                          <small><span class="material-icons-outlined">schedule</span> 5 mins</small>
                                      </h4>
                                      <!-- The message -->
                                      <p>Why not buy a new awesome theme?</p>
                                  </a>
                              </li>
                              <!-- end message -->
                          </ul>
                          <!-- /.menu -->
                      </li>
                      <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
              </li>
              <!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                  <!-- Menu toggle button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="material-icons md-18">notifications</span>
                      <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="header">You have 10 notifications</li>
                      <li>
                          <!-- Inner Menu: contains the notifications -->
                          <ul class="menu">
                              <li>
                                  <!-- start notification -->
                                  <a href="#"> <span class="material-icons-outlined">person</span> 5 new members joined today </a>
                              </li>
                              <!-- end notification -->
                          </ul>
                      </li>
                      <li class="footer"><a href="#">View all</a></li>
                  </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu" style="display: none">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-flag-o"></i>
                      <span class="label label-danger">9</span>
                  </a>
                  <ul class="dropdown-menu">
                      <li class="header">You have 9 tasks</li>
                      <li>
                          <!-- Inner menu: contains the tasks -->
                          <ul class="menu">
                              <li>
                                  <!-- Task item -->
                                  <a href="#">
                                      <!-- Task title and progress text -->
                                      <h3>
                                          Design some buttons
                                          <small class="pull-right">20%</small>
                                      </h3>
                                      <!-- The progress bar -->
                                      <div class="progress xs">
                                          <!-- Change the css width attribute to simulate progress -->
                                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                              <span class="sr-only">20% Complete</span>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <!-- end task item -->
                          </ul>
                      </li>
                      <li class="footer">
                          <a href="#">View all tasks</a>
                      </li>
                  </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <span class="hidden-xs">Alexander Pierce</span>
                  </a>
                  <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header text-left">
                          <p>
                              <strong>Yokayuga</strong> (OWNER)
                              <small><a href="mailto:yokayuga@gmail.com" class="text-white">yokayuga@gmail.com</a></small>
                          </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="profile.html" style="width: 100%;display: block;">Profile</a>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="credit.html" style="width: 100%;display: block;">Credits</a>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="billings.html" style="width: 100%;display: block;">Billings</a>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="change-plan.html" style="width: 100%;display: block;">Change Plan</a>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="apps.html" style="width: 100%;display: block;">Apps</a>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="bonus.html" style="width: 100%;display: block;">Bonuses</a>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="settings.html" style="width: 100%;display: block;">Settings</a>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-xs-12 text-left user-padding">
                                  <a href="tutorials.html" style="width: 100%;display: block;">Tutorials</a>
                              </div>
                          </div>
                          <!-- /.row -->
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                          <!-- <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                          </div> -->
                          <div class="pull-right">
                              <a href="#" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                      </li>
                  </ul>
              </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid" style="padding: 0;">
      <section>
        <div class="bs-example" data-example-id="simple-nav-justified">
          <ul class="nav nav-pills nav-justified">
            <li role="presentation" class="active"><a data-toggle="pill" href="#add-product">Product</a></li>
            <li role="presentation"><a data-toggle="pill" href="#checkout">Checkout Page</a></li>
            <li role="presentation"><a data-toggle="pill" href="#success-page">Success Page</a></li>
          </ul>
        </div>
      </section>
    </div>

    <div class="container">
      <!-- <section>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#options">Options</a>
          <a href="#storefront">Storefront</a>
          <a href="#images">Images</a>
          <a href="#pricing">Pricing</a>
          <a href="#inventory">Inventory</a>
          <a href="#bump">Bump</a>
          <a href="#shipping">Shipping</a>
          <a href="#payment">Payment</a>
          <a href="#unique">Unique Code</a>
          <a href="#assign">Assign Product to</a>
        </div>
        <span style="font-size:30px;cursor:pointer" class="open-nav" onclick="openNav()">&#9776; </span>      
      </section> -->

      <!-- Main content -->

      <div class="tab-content content">
		  <div id="add-product" class="tab-pane fade in active">
		    <?php include 'add-product-view.php'; ?>
		  </div>
		  <div id="checkout" class="tab-pane fade">
		    <?php include 'checkout.php'; ?>
		  </div>
		  <div id="success-page" class="tab-pane fade">
		    <?php include 'success-page.php'; ?>
		  </div>
		</div>
      
      
    </div>
    
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Tags Input -->
<script src="plugins/tags-input/bootstrap-tagsinput.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Bootstrap slider -->
<script src="plugins/bootstrap-slider/bootstrap-slider.js"></script>
<script>
  $(function () {
    $('#ex1').slider({
      formatter: function(value) {
        return 'Current value: ' + value;
      }
    });
    $('#ex2').slider({
      formatter: function(value) {
        return 'Current value: ' + value;
      }
    });

    //Initialize Select2 Elements
    $(".select2").select2();
    
    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //bootstrap WYSIHTML5 - text editor
    $(".textarea-description").wysihtml5();

    //Money Euro
    $("[data-mask]").inputmask();
    
  });
</script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script src="add-product.js"></script>
<script src="checkout.js"></script>
<script src="success-page.js"></script>


</body>
</html>
