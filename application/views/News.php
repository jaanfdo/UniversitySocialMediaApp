<div class="container">

     <div class="col-sm-2">

     </div>


     <div class="col-sm-8">

     	<div class="col-sm-12" style="padding-left: 20px;">
            <h1>News</h1>
            <button class="btn btn-success" onclick="add();" ><i class="glyphicon glyphicon-plus"></i> Add New</button>
        </div>
        
     </div>



     <div class="col-sm-2">
     </div>
</div>



<!-- Bootstrap modal -->
<div class="modal fade" id="modal" role="dialog">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      <h3 class="modal-title">News Add</h3>
	    </div>
	    <div class="modal-body form">
	    <form action="#" id="form" class="form-horizontal">
	            <div class="form-body">
	                <div class="form-group">
		                <label class="control-label col-md-3">News Name</label>
	                    <div class="col-md-9">
	                        <input name="txtID" type="hidden" hidden="hidden">
	                        <input name="txtOwner" type="hidden" hidden="hidden">
	                        <input name="txtNewsName" placeholder="News Name" class="form-control" type="text">
	                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News</label>
                        <div class="col-md-9">
                            <input name="txtNews" placeholder="News" class="form-control" type="text">
                        </div>
                    </div>          
                    <div class="form-group">
                        <label class="control-label col-md-3">Date and Time</label>
                        <div class="col-md-9">
                            <input name="dtpDate" placeholder="Date" class="form-control" type="Date" width="150">
                            <input name="dtpTime" placeholder="Time" class="form-control" type="Time" width="100">
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


<script type="text/javascript">
alert('ok');
var url;
    function add()
    {
      $('#form')[0].reset(); // reset form on modals
      $('#modal').modal('show'); // show bootstrap modal
      $('.modal-title').text('Create News'); // Set Title to Bootstrap modal title
      
    } 
 
    function save()
    {
    	url = "<?php echo site_url('News_c/add/')?>";
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding data');
            }
        });
    }

    /*function delete(id)
    {
      if(confirm('Are you sure you want to delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php //echo site_url('News_c/delete/')?>"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }*/

    function delete(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('News_c/delete/')?>"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }

</script>