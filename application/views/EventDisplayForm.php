<?php
/*require_once('dbconn.php');
$db_handle = new DBController();
require_once 'Functions.php';
$class = new functions();
$PID=$_REQUEST['PID'];
$viewproduct=$class->ViewProduct($PID);
$row=mysql_fetch_assoc($viewproduct);

$viewproduct=$class->AddtoCartInsert($PID);
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product View Form</title>
</head>
<body>


<div class="container" style="margin-bottom:20px; margin-top:20px;">
	<div class="row">
        <form method="post" action="SalesRequestForm.php?PID=<?php //echo $row["PID"]; ?>" enctype="multipart/form-data">
            <div class="frame">

                <div class="col-sm-12">
                    <h2 class="text-capitalize black">Event Name <?php //echo $row['PName']; ?></h2>
                    <hr/>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8">                    
                        <div class="img-responsive ">
                            <img src="<?php //echo $row['Picture']; ?>" width="350" height="250">
                            <h4 class="product-overlay-bar-mini"><?php //echo $pid = $row['PID']; $_SESSION['pid'] = $pid;?></h4>
                        </div>
                    </div>
                    <!-- style="border:1px solid rgba(223,223,223,1.00);" -->
                    <div class="col-sm-4" >                    
                        <h1 class="text-capitalize text-center">Course : <?php //echo $row['Brand']; ?></h1>
                        
                        <h1 class="blue form-group" style="border-bottom:1px solid rgba(223,223,223,1.00);">Place : <?php //echo $row['Price']; ?></h1>
                        <p class="well white"><strong>Date: </strong><?php //echo $row['Fits']; ?> | <strong>Time: </strong><?php //echo $row['NeckLine']; ?></p>
                        
                        
                        <div class="col-sm-12"><input type="submit" id="modal" class="btn btn-default pull-right" value="Add to Cart"  data-toggle="modal" data-target="#myModal"/></div>
                    </div>
                </div>
                
                <div class="col-sm-12">
                <p>Description <?php //echo $row['Fits']; ?> </p>
                        
                </div>
            </div>
    	</form>
    </div>
</div>

</body>
</html>
