<?php 
//session_start();
//require_once('Functions.php');
//$class = new functions();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>

</head>

<body>


<div class="container" id="products">
	<div class="row">
        <div class="col-sm-2">
            <h4 style="background-color:#008080; color:#ffffff; padding:10px 0px 10px 10px">Latest Posted Photos</h4>
            <div style="padding: 5px 10px 5px 5px; border:1px solid #008080;">
            <ul class="content">
            <?php
                if($gLatest){?>
                <?php 
               foreach ($gLatest as $items){
            ?> 
                <li style="border-bottom: 1px solid #008080;">
                    <div  class="img-responsive pbox-sm">
                        <div class="productinfo text-center text-capitalize">
                        <img src="<?php echo base_url() . $items->file; ?>"/>
                        <h5 class="blue"><?php echo $items->name; ?></h5>
                        <a onclick="dis(<?php echo $items->id;?>)" role="tab" data-toggle="tab">View</a>
                        </div>
                    </div>
                </li>
                 <?php } }?>

            </ul>
            </div>
        </div>
        <div class="col-sm-10">              
            <h2>Photo Gallery</h2>
            <button class="btn btn-success" onclick="add();" ><i class="glyphicon glyphicon-plus"></i> Add New</button>
            <hr />        
        </div>                       
        <div class="col-sm-10">       
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active">
                    <ul class="contentGal">
                        <?php
                            if($data){?>
                            <?php 
                           foreach ($data as $items){
                        ?> 
                        <li>
                        <div class="img-responsive image" style="margin:10px;">
                            <div class="productinfo text-center text-capitalize">
                                <img src="<?php echo $items->file; ?>"/>
                                <h4 class="blue" style="word-wrap: break-word; "><?php echo $items->name; ?></h4>
                            </div>   
                            <div class="product-overlay text-center">
                                <div class="overlay-content">                                   
                                    <a onclick="deletes(<?php echo $items->id;?>)">Delete <i class="glyphicon glyphicon-menu-right"></i></a>
                                </div>
                            </div>                             	
                            
                        </div>
                        </li> 
                        <?php } } ?>
                     </ul>
                </div> 
                
                
            </div>        
    	</div>
    </div>
</div>


<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Event Add</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-3">News Name</label>
                        <div class="col-md-9">
                            <input name="txtID" type="text" hidden="hidden">
                            <input name="txtOwner" type="text" >
                            <input name="txtNewsName" placeholder="News Name" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">File</label>
                        <div class="col-md-9">
                            <input name="txtImage" placeholder="Image" class="form-control" type="file">
                        </div>
                    </div>        
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save();" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>  
    </div>
</div>


<div id="modal_photo" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Photos</h4>
      </div>
      <div class="modal-body">
            <img name="image" id="imgSrc" >

            <input name="txtID" name="txtID" type="text">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">

    //showAll();

    function add()
    {
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Photos'); // Set Title to Bootstrap modal title
    } 
    function save()
    {
        url = "<?php echo site_url('Gallery_c/add')?>";
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                alert('Image Added Successfully!!!');
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function deletes(id)
    {
      if(confirm('Are you sure you want to delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('Gallery_c/delete/')?>"+id,
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

    //function
    /*function showAll(){
        $.ajax({
            type: 'ajax',
            url: '<?php //echo base_url() ?>RequestedAppointment_c/showAll',
            async: false,
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html +='<tr>'+
                        '<td>'+data[i].course+'</td>'+
                        '<td>'+data[i].batchno+'</td>'+
                        '<td>'+data[i].subjects+'</td>'+
                        '<td>'+data[i].lecturer+'</td>'+
                        '<td>'+data[i].reason+'</td>'+
                        '<td>'+data[i].date+'</td>'+
                        '<td>'+data[i].time+'</td>'+
                        '<td>'+data[i].response+'</td>'+
                        '<td>'+
                                '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">Edit</a>'+
                                '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'">Delete</a>'+
                        '</td>'+
                    '</tr>';
                }
                $('#showData').html(html);
            },
            error: function(){
                alert('Could not get Data from Database');
            }
        });
    }*/


    function dis(id)
    {
        alert('OK');
      //save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      var modalImg = document.getElementById("imgSrc");
      var img = document.getElementById("txtID");
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('Gallery_c/GetID/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="txtID"]').val(data.file);
            modalImg.src = data.file;
            //img.text = data.file;
            
            $('#modal_photo').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('View Photo'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }


</script>

</body>
</html>