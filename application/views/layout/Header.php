<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Social App</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>"> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/stickUp.min.js"></script>

<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/jquery.rateyo.min.css" rel="stylesheet" type="text/css"/>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<script src="js/stickUp.min.js" type="text/javascript"></script>
<script src="js/jquery.pajinate.js" type="text/javascript"></script>
<script src="js/parallax.min.js" type="text/javascript"></script>
<script src="js/jquery.rateyo.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/Validation.js" type="text/javascript"></script>	-->

<style type="text/css">
    li{
        list-style: none;
    }

</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php
//session_start();
?>

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
				<li><a href="<?php echo base_url('Home_c') ?>">Home</a></li>
				<li><a href="<?php echo base_url('Events_c') ?>">Events</a></li>
                <?php //if (!empty($this->session->userdata('LoginDetails'))) { 
                    ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Appointment <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?php 
                    //if($this->session->userdata('userroll') != 'lecturer'){ ?>
                    <li><a href="<?php echo base_url('RequestedAppointment_c') ?>">Requested Appointment</a></li>
                    <?php 
                     //} else { ?>
                    <li><a href="<?php echo base_url('ResponseAppointment_c') ?>">Response Appointment</a></li>
                    <?php //} ?>      
                </ul>
                </li>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php 
                    //if($this->session->userdata('userroll') == 'lecturer'){ ?>
                    <li><a href="<?php echo base_url('ClassSchedule_c') ?>">Class Schedule</a></li>
                    <li><a href="<?php echo base_url('ExamSchedule_c') ?>">Exam Schedule</a></li>
                    <?php 
                    //} else { ?>
                    <li><a href="<?php echo base_url('Schedule_c'); ?>">Schedule</a></li>
                    <?php //} ?>        
                </ul>
                </li>
                <?php //}  if(!empty($this->session->userdata('LoginDetails'))){ ?>
                <!-- <li><a href="<?php //echo base_url('Login_c/logout') ?>">Log Out</a></li> -->
                <?php //} ?>  		
			</ul>
		</div>
	</div>   
</nav>

<a href="#top" class="fixed-top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span> Top </a>

</body>
</html>