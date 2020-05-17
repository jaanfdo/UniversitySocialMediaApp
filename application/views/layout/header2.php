<!DOCTYPE html>
<html>
<head>
	<title>Student Social App</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>"> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/stickUp.min.js"></script>

<style type="text/css">
    li{
        list-style: none;
    }

</style>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed" id="top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a href="Index.php"><h3 style="color: #fff;">Institute Information Sharing System</h3></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-right:10px">  
                <li><a href="<?php echo base_url('Login_c') ?>">Login</a></li>
                <li><a href="<?php echo base_url('SignUp_c') ?>">Sign Up</a></li>		
			</ul>
		</div>
	</div>   
</nav>