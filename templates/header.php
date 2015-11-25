<!DOCTYPE html>
<html lang="en">
<head>

  <!--[if lt IE 9]> 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap_ie8.css"> 
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>
<body>
  <div class="Overlay" id="Overlay"></div>
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-centered">
    <!--HEADER START-->
    <!--NavBar Start-->
    <div class="container-fluid">
      <!-- Second navbar for profile settings -->
      <nav class="navbar navbar-inverse">
        <div class="row">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php"><img class="img-responsive" src="../images/logo.png"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse menu" id="navbar-collapse-4">
            <ul class="nav navbar-nav navbar-right header_navbar">
              <li class="Home"><a href="../index.php">Home</a></li>
              <li class="AboutUs"><a href="../templates/AboutUs.php">About</a></li>
              <li class="Services" ><a href="../templates/Services.php">Services</a></li>
              <li class="Gallery"><a href="../templates/Gallery.php">Gallery</a></li>
              <li class="Events"><a href="../templates/Events.php">Events</a></li>
              <li class="Contact"><a href="../templates/ContactUs.php">Contact</a></li>
             <li ><a href="#" id="UserReg_Button">Registration</a></li>
              <!--<li>
                <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse4">Profile <i class=""></i> </a>
              </li>-->
            </ul>
            <!--<ul class="collapse nav navbar-nav nav-collapse slide-down" role="search" id="nav-collapse4">
              <li><a href="#">Support</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="img-circle" src="https://pbs.twimg.com/profile_images/588909533428322304/Gxuyp46N.jpg" alt="maridlcrmn" width="20" /> Maridlcrmn <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">My profile</a></li>
                  <li><a href="#">Favorited</a></li>
                  <li><a href="#">Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>-->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav><!-- /.navbar -->
    </div>
    <!--NavBar End-->
    <!--HEADER END -->
  </div>
</body>
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>

<div class="container" id="UserReg_Container">
  <div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
        </div>
        <div class="panel-body">
          <form method="post" action="../templates/header.php">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="Full_Name" id="Full_Name" class="form-control input-sm" placeholder="Full Name">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                </div>
              </div>
            </div>
            <input type="submit" name="Reg_submit" id="Reg_submit" value="Register" class="btn btn-info btn-block">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php  
if (isset($_POST['Reg_submit'])) {
 $User_Type = "User";
 $Email = $_POST['email'];
 $Full_Name = $_POST['Full_Name'];
 $First_Name = $_POST['first_name'];
 $Last_Name = $_POST['last_name'];
 $Password = $_POST['password'];

  $serverName = "SQL5017.HostBuddy.com"; 
  $uid = "DB_9DF548_varsha_admin";   
  $pwd = "admin@123";  
  $databaseName = "DB_9DF548_varsha"; 

  $connectionInfo = array( "UID"=>$uid,                            
                           "PWD"=>$pwd,                            
                           "Database"=>$databaseName); 
    
  /* Connect using SQL Server Authentication. */  
  $conn = sqlsrv_connect( $serverName, $connectionInfo);  
  $UserExists = "select Email from Varsha_Registration where Email='$Email'";

  $isUserExists = sqlsrv_query( $conn, $UserExists);

  if(!$isUserExists){
    $tsql = "INSERT INTO Varsha_Registration (User_Type,Email,User_Name,First_Name,Last_Name,Password)VALUES ('$User_Type', '$Email', '$Full_Name', '$First_Name', '$Last_Name', '$Password')";    
    /* Execute the query. */   
    $stmt = sqlsrv_query( $conn, $tsql);   
    if ($stmt){  
          ?><script type="text/javascript">
                         window.location='../index.php';
                   </script><?php  
    }else {  
         echo "Error in statement execution.\n";  
         die( print_r( sqlsrv_errors(), true));  
    }  
  }else{
    echo "Email Already Exist in Records please try with other email";
  }  
}
?>















