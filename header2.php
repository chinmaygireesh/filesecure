<?php
session_start();
if($_SESSION['login_name']=="")
header("location:index.php");
$page = basename($_SERVER['PHP_SELF']);

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FileSecure</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            
                            <div class="text">
                                <h2><?php if($page =='index.php'){ echo "Home";}else if($page=='contact.php'){echo "Contact";}
                                else if($page=='about.php'){echo "About";} else if($page=='login.php'){echo "Login";}
                                else if($page=='register.php'){echo "Register";}else if($page=='note_upload.php'){echo "Uploads";}
                                else if($page=='dashboard.php'){echo "Services";} ?> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="top-bar-right">
                    
                          <div class="text">
                          <h2>Welcome  <?php echo $_SESSION['login_name'];?></h2>
                          </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
 <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="dashboard.php" class="navbar-brand">FileSecure</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                    <a href="dashboard.php" <?php if($page == 'dashboard.php'){ echo ' class="nav-item nav-link active"';}else{echo 'class="nav-item nav-link"';}?>>Home</a>
                    <a href="myfiles.php" <?php if($page == 'history.php'){ echo ' class="nav-item nav-link active"';}else{echo 'class="nav-item nav-link"';}?>>My files </a>
                          <a href="file.php" <?php if($page == 'file.php'){ echo ' class="nav-item nav-link active"';}else{echo 'class="nav-item nav-link"';}?>>Uploads Files</a>
                      <a href="getfile.php" <?php if($page == 'getfile.php'){ echo ' class="nav-item nav-link active"';}else{echo 'class="nav-item nav-link"';}?>>Download File</a>
                       <a href="requestfile.php" <?php if($page == 'requestfile.php'){ echo ' class="nav-item nav-link active"';}else{echo 'class="nav-item nav-link"';}?>>Request File</a>
                     
                         <a href="request.php" <?php if($page == 'request.php'){ echo ' class="nav-item nav-link active"';}else{echo 'class="nav-item nav-link"';}?>>User Requested </a>
                      <a href="history.php" <?php if($page == 'history.php'){ echo ' class="nav-item nav-link active"';}else{echo 'class="nav-item nav-link"';}?>>History </a>
                        
                        <a href="index.php" class="nav-item nav-link">Logout</a>
                             </div>
                </div>
            </div>
        </div>