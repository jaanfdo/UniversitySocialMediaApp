<?php
//session_start();
//require_once 'Functions.php';
//$class = new functions();
//if(empty($_SESSION['UName'])){
  //  header('Location:../Administration.php');
//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events</title>

</head>

<body>
<?php //include('Header.php'); ?>

<div class="container">
    <div class="col-sm-12">
        <div class="col-sm-12">
            <h1>Events</h1>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-2">
              <button class="btn btn-success btn-block" onclick="add();" ><i class="glyphicon glyphicon-plus"></i> Create Event</button>

              <h3 style="color:#fff; background-color: #008080; padding:10px 0px 10px 10px">Latest Events</h3>
              <div style="padding: 5px 5px 5px 5px; border: 1px solid #008080; ">
              <ul class="content">
              <?php
                  if($eLatest){?>
                  <?php 
                 foreach ($eLatest as $items){ 
              ?> 
                  <li style="border-bottom: 1px solid #008080;">
                      <div  class="img-responsive pbox-sm">
                          <div class="productinfo text-center text-capitalize">
                          <img src="<?php echo base_url(). 'assets/images/Events/' . $items->photo; ?>">  
                          <h5 class="blue"><?php echo $items->eventname; ?></h5>
                          <p><?php echo $items->place; ?></p>
                          <p><?php $date = new DateTime($items->date); 
                            echo $date->format('y-M-d'); ?></p>
                          <a href="#ALL" role="tab" data-toggle="tab">View</a>
                          </div>
                      </div>
                  </li>
                   <?php } } ?>
              </ul>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="frame">
              <ul class="content">
              <?php
              if($events){ ?>
              <?php 
             foreach ($events as $items){ 
              ?>            
                <li id="displayData" style="border:1px solid #dddfe2; background-color: #fff; border-radius: 3px; margin-bottom: 10px;">
                <div class="col-sm-12">
                    <div class="col-sm-12" style="border-bottom: 1px solid #dddfe2; margin-bottom: 5px;" >
                        <div class="col-sm-5">
                            <div class="col-sm-9">
                              <h3 ><i class="glyphicon glyphicon-user"></i> <?php echo $items->owner; ?></h3>
                            </div>
                        </div>
                        <div class="col-sm-3" style="text-align: right;">
                           <p><?php $date = new DateTime($items->createddate); 
                            echo $date->format('y-M-d'); ?></p> 
                        </div>
                        <div class="col-sm-2">
                            <p><?php $date = new DateTime($items->createddate); 
                            echo $date->format('H:i');  ?></p>
                        </div>
                        <div class="col-sm-2">
                        <button class="btn btn-warning" onclick="edit(<?php echo $items->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                        <button class="btn btn-danger" onclick="deletes(<?php echo $items->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
                        </div>
                        
                    </div>

                    <div class="col-sm-12">
                    <div class="col-sm-4">
                        <div class="img-responsive">
                            <img src="<?php echo base_url(). 'assets/images/Events/' . $items->photo; ?>">  
                            <h5 >Organized by <?php echo $items->organizer; ?></h5>
                        </div>  
                    </div>
                    <div class="col-sm-8">
                    <div class="col-sm-12" style="background-color:#008080; ">
                        <h2 style="color:#fff; word-wrap: break-word; "><?php echo $items->eventname; ?></h2>
                    </div>
                    
                    
                    <div class="col-sm-12" style="border-bottom: 1px solid #dddfe2;">
                        <h3 ><?php echo $items->course; ?> </h3>
                        <h3 >Batch <?php echo $items->batchno; ?></h3>
                    </div>
                    <div class="col-sm-12" style="border-bottom: 1px solid #dddfe2;">
                        <h5><i class="glyphicon glyphicon-map-marker"></i> Venue : <?php echo $items->place; ?></h3>
                        <h5 style="word-wrap: break-word;"></i>Address : <?php echo $items->address; ?></h3>
                    </div>
                    <div class="col-sm-12">
                        <h3 ><i class="glyphicon glyphicon-calendar"></i> Date :<?php $date = new DateTime($items->date); 
                            echo $date->format('y-M-d');  ?> Time :<?php $date = new DateTime($items->time); 
                            echo $date->format('H:i');  ?></h3>
                    </div>
                    <div class="col-sm-12" >
                        <p style="word-wrap: break-word;"><?php echo $items->description; ?></p>
                    </div>
                    </div>
                    </div>
                    
                    
                </div>
                </li>
                <?php } } ?>
                </ul>
            </div>
            
            </div>
            <div class="col-sm-2">
              <h3 style="color:#fff; background-color: #008080; padding:10px 0px 10px 10px">Top Events</h3>
              <div style="padding: 5px 5px 5px 5px; border: 1px solid #008080; ">
              <ul class="content">
              <?php
                  if($eMost){?>
                  <?php 
                 foreach ($eMost as $items){ 
              ?> 
                  <li style="border-bottom: 1px solid #008080;">
                      <div  class="img-responsive pbox-sm">
                          <div class="productinfo text-center text-capitalize">
                          <img src="<?php echo base_url(). 'assets/images/Events/' . $items->photo; ?>">  
                          <h5 class="blue"><?php echo $items->eventname; ?></h5>
                          <p><?php echo $items->place; ?></p>
                          <p><?php $date = new DateTime($items->date); 
                            echo $date->format('y-M-d'); ?></p>
                          <a href="#ALL" role="tab" data-toggle="tab">View</a>
                          </div>
                      </div>
                  </li>
                   <?php } }?>
              </ul>
              </div>
            </div>
        </div>

    </div>

</div>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Event Add</h3>
        </div>
        <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
        
        <div class="form-body">
          <input type="hidden" value="" name="book_id"/>
            <div class="form-group">
              <label class="control-label col-md-3">Event Name</label>
              <div class="col-md-9">
                <input name="txtID" type="hidden" >
                <input name="txtOwner" type="hidden" value="jaan">
                <input name="txtEventName" placeholder="Event Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Course</label>
              <div class="col-md-9">
                <input name="txtCourse" placeholder="Course" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Batch</label>
              <div class="col-md-9">
                    <input name="txtBatchNo" placeholder="Batch" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Organized By</label>
                <div class="col-md-9">
                    <input name="txtOrganizer" placeholder="Organized by" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Location</label>
                <div class="col-md-9">
                    <input name="txtPlace" placeholder="Location" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Address</label>
                <div class="col-md-9">
                    <input name="txtAddress" placeholder="Address" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Date and Time</label>
                <div class="col-md-9">
                    <input name="dtpDate" placeholder="Date" class="form-control" type="Date" width="150">
                    <input name="dtpTime" placeholder="Time" class="form-control" type="Time" width="100">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="txtDescription" placeholder="Description" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3">Image</label>
                <div class="col-md-9">
                    <input name="txtImage" placeholder="Image..." class="form-control" type="File">
                </div>
            </div>
            
          <div id="display">
            
          </div>
        </div>
        </form>
        
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        </div>
      </div>
    </div>



<script type="text/javascript">
//alert('OK');
 
    var save_method; //for save method string
    var table;
 
 
    function add()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('#form').attr('action', '<?php echo base_url('events_c/add')?>');
      $('.modal-title').text('Create Event'); // Set Title to Bootstrap modal title
    }
 
    function edit(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('#form').attr('action','<?php echo site_url('events_c/update')?>');
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('events_c/edit/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="txtID"]').val(data.id);
            $('[name="txtEventName"]').val(data.eventname);
            $('[name="txtCourse"]').val(data.course);
            $('[name="txtBatchNo"]').val(data.batchno);
            $('[name="txtOrganizer"]').val(data.organizer);
            $('[name="txtPlace"]').val(data.place);
            $('[name="txtAddress"]').val(data.address);
            $('[name="dtpDate"]').val(data.date);
            $('[name="dtpTime"]').val(data.time);
            $('[name="txtDescription"]').val(data.description);
            $('[name="txtOwner"]').val(data.owner);
            
 
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
 
 
 
    function save()
    {
      var url = $('#form').attr('action');
      var data = $('#form').serialize();
      /*var url;
      if(save_method == 'add')
      {
          url = "";
      }
      else
      {
        url = "<?php //echo site_url('events_c/update')?>";
      }*/
 
       //ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: data,
            dataType: "JSON",
            async: false,
            success: function(data)
            {
              if (save_method == 'add') {
                alert('Data Added Successfully!!!');
              }else{
                alert('Data Updated Successfully!!!');
              }
              //$('#display').html(data);
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
               location.reload();// for reload a page
              save_method = '';
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
 
    function deletes(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('events_c/delete/')?>"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {               
               location.reload();
               alert('Record Deleted Successfully!!!');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
 
  </script>
 


</body>
</html>
