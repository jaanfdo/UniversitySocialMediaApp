<?php
//session_start();
//require_once 'Functions.php';
//$class = new functions();
//if(empty($_SESSION['UName'])){
  //  header('Location:../Administration.php');
//}
?>


<div class="container">

     <div class="col-sm-3" style="margin-top: 10px; margin-bottom: 5px;">
        <h1>News</h1>
        <button class="btn btn-success btn-block" onclick="add();" style="margin-bottom: 10px;" ><i class="glyphicon glyphicon-plus"></i> Add New</button>

        <div style="padding: 5px; border:1px solid #dddfe2; border-radius: 3px; background-color: #fff; margin-bottom: 5px;">
        <h5 style="color:#0066ff; padding:10px 0px 10px 10px; border-bottom:1px solid #dddfe2;">Most Viewed News</h5>
        <ul class="content">
        <?php
            if($nMost){?>
            <?php 
           foreach ($nMost as $items){ 
        ?> 
            <li style="border-bottom: 1px solid #dddfe2;">
                <div  class="img-responsive pbox-sm">
                    <div class="productinfo text-center text-capitalize">
                    <h5 class="blue" style="word-wrap: break-word;"><?php echo $items->name; ?></h5>
                    <p ><?php echo $items->news; ?></p>
                    </div>
                </div>
            </li>
             <?php } }?>

        </ul>
        </div>
        
        <div style="padding: 5px; border:1px solid #dddfe2; background-color: #fff; border-radius: 3px; margin-bottom: 5px;">
        <h5 style="color:#0066ff; padding:10px 0px 10px 10px; border-bottom:1px solid #dddfe2;">Latest Posted News</h5>
        <ul class="content">
        <?php
            if($nLatest){?>
            <?php 
           foreach ($nLatest as $items){
        ?> 
            <li style="border-bottom: 1px solid #dddfe2;">
                <div  class="img-responsive pbox-sm">
                    <div class="productinfo text-center text-capitalize">
                        <h5 class="blue" style="word-wrap: break-word;"><?php echo $items->name; ?></h5>
                        <p ><?php echo $items->news; ?></p>
                    </div>
                </div>
            </li>
             <?php } }?>

        </ul>
        </div>
    </div>

    <div class="col-sm-7">
        <div class="col-sm-12" style="margin-top: 30px;">
            <ul class="content">
            <?php
            if($all){?>
            <?php 
           foreach ($all as $items){ 
            ?>            
            <li style="border: 1px solid #dddfe2; margin-top: 5px; margin-bottom: 5px; background-color: #fff; border-radius: 3px; ">
                <div class="col-sm-12">
                    <div class="col-sm-12" style="border-bottom: 1px solid #c0c0c0;">
                        <div class="col-sm-11">
                            <h3><i class="glyphicon glyphicon-user"></i>  <?php echo $items->owner; ?></h3>
                        </div>
                        <div class="col-sm-1">
                            <button class="btn-empty" style="color: red;" onclick="deletes(<?php echo $items->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
                        </div> 
                        <hr/>              
                    </div>
                    
                    <div class="col-sm-12" >
                        <p style="word-break: keep-all;"><?php echo $items->news; ?></p>
                        
                    </div>
                    <div class="col-sm-12">
                        <h4 class="col-sm-7"><?php echo $items->name; ?></h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-2">
                           <p><?php $date = new DateTime($items->date);
                                echo $date->format('Y-M-d');?></p> 
                        </div>
                        <div class="col-sm-2">
                            <p><?php  $date = new DateTime($items->time); 
                            echo $date->format('H:i');?></p>
                        </div> 
                        <div class="col-sm-1 col-sm-offset-7">
                            <i class="glyphicon glyphicon-thumbs-up"></i>
                        </div> 
                    </div>
                    
                </div>
            </li>
            <?php } }?>
            </ul>
        </div>
    </div>


    <div class="col-sm-2" style="margin-top: 10px;">
        <!--<div style="padding: 5px 10px 5px 5px; border:1px solid #dddfe2; background-color: #fff; border-radius: 3px; margin-bottom: 5px;">
        <h5 style="color:#0066ff; padding:10px 0px 10px 10px; border-bottom:1px solid #dddfe2;">Latest Posted Photos</h5>
        <ul class="content">
        <?php
            /*if($gLatest){?>
            <?php 
           foreach ($gLatest as $items){
        ?> 
            <li style="border-bottom: 1px solid #008080;">
                <div  class="img-responsive pbox-sm">
                    <div class="productinfo text-center text-capitalize">
                    <img src="<?php echo base_url() . $items->file; ?>"/>
                    <h5 class="blue" style="word-wrap: break-word; overflow: hidden;"><?php echo $items->name; ?></h5>
                    <a href="<?php echo base_url('Gallery_c'); ?>" >View</a>
                    </div>
                </div>
            </li>
             <?php } }*/?>

        </ul>
        </div>-->

        
        <div style="padding: 5px 10px 5px 5px; border:1px solid #dddfe2; background-color: #fff; border-radius: 3px; margin-bottom: 5px;">
        <h5 style="color:#0066ff; padding:10px 0px 10px 10px; border-bottom:1px solid #dddfe2;">Upcomming Events</h5>
        <ul class="content">
        <?php
            if($eMost){?>
            <?php 
           foreach ($eMost as $items){ 
        ?> 
            <li style="border-bottom: 1px solid #dddfe2;">
                <div  class="img-responsive pbox-sm">
                    <div class="productinfo text-center text-capitalize">
                    <img src="<?php echo base_url(). 'assets/images/Events/' . $items->photo; ?>">  
                    <h5 class="blue" style="word-wrap: break-word;"><?php echo $items->eventname; ?></h5>
                    <p><?php echo $items->place; ?></p>
                    <p><?php echo $items->date; ?></p>
                    <a href="<?php echo base_url('Events_c'); ?>" role="tab" data-toggle="tab">View</a>
                    </div>
                </div>
            </li>
             <?php } }?>

        </ul>
        </div>

        
        <div style="padding: 5px 10px 5px 5px; border:1px solid #dddfe2; background-color: #fff; border-radius: 3px; margin-bottom: 5px;">
        <h5 style="color:#ffffff; padding:10px 0px 10px 10px; border-bottom:1px solid #dddfe2;">Latest Posted Events</h5>
        <ul class="content">
        <?php
            if($eLatest){?>
            <?php 
           foreach ($eLatest as $items){ 
        ?> 
            <li style="border-bottom: 1px solid #dddfe2;">
                <div  class="img-responsive pbox-sm">
                    <div class="productinfo text-center text-capitalize">
                    <img src="<?php echo base_url(). 'assets/images/Events/' . $items->photo; ?>">  
                    <h5 class="blue" style="word-wrap: break-word;"><?php echo $items->eventname; ?></h5>
                    <p><?php echo $items->place; ?></p>
                    <p><?php echo $items->date; ?></p>
                    <a href="<?php echo base_url('Events_c'); ?>" role="tab" data-toggle="tab">View</a>
                    </div>
                </div>
            </li>
             <?php } }?>

        </ul>
        </div>

    </div>
</div>


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
                    <input name="txtID" id="txtID" type="text" hidden="hidden">
                    <input name="txtOwner" id="txtOwner" type="hidden" value="<?php echo $this->session->userdata('fname'); ?>" >
                    <input name="txtNewsName" id="txtNewsName" placeholder="News Name" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">News</label>
                <div class="col-md-9">
                    <textarea name="txtNews" id="txtNews" placeholder="News" class="form-control" rows="3"></textarea>
                </div>
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

<div class="modal fade" id="modalview" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">News Add</h3>
        </div>
        <div class="modal-body form">
        <div class="col-sm-12">
            <ul class="content" id="showdata">
            <li style="border-bottom: 1px solid #0066ff; margin: 5px; ">
                <div class="col-sm-12">
                    <div class="col-sm-12" style="border-bottom: 1px solid #c0c0c0;">
                        <div class="col-sm-11">
                            <h3 id="pUser"><i class="glyphicon glyphicon-user"></i> </h3>
                        </div> 
                        <hr/>              
                    </div>
                    
                    <div class="col-sm-12">
                        <p id="pNews" style="word-wrap: break-word; "></p>
                        
                    </div>
                    <div class="col-sm-12">
                        <h4 id="pName" class="col-sm-7"></h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-2">
                           <p id="pDate"></p> 
                        </div>
                        <div class="col-sm-2">
                            <p id="pTime"></p>
                        </div> 
                        <div class="col-sm-1 col-sm-offset-7">
                            <i class="glyphicon glyphicon-thumbs-up"></i>
                        </div> 
                    </div>
                    
                </div>
            </li>
            </ul>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function add()
    {
      $('#form')[0].reset(); // reset form on modals
      $('#modal').modal('show'); // show bootstrap modal
      $('.modal-title').text('Create News'); // Set Title to Bootstrap modal title
    } 
 
    function save()
    {
      var url = "<?php echo site_url('News_c/add')?>";
 
        var owner = $('#txtOwner').val();
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
                alert('Data Added Successfully!!!');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding data');
            }
        });
    }

    function deletes(id)
    {
      if(confirm('Are you sure you want to delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('News_c/delete/')?>"+id,
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
    $('#viewData').click(function(){
        var id = $(this).attr('data');
        $('#modalview').modal('show');
        $('#modalview').find('.modal-title').text('News');
        $.ajax({
            type: 'ajax',
            url: "<?php echo site_url('News_c/view/')?>" + id,
            async: false,
            dataType: 'json',
            success: function(data){
                //var html = '';

                /*html +='<li style="border-bottom: 1px solid #0066ff; margin: 5px; ">'+
                        '<div class="col-sm-12">'+
                            '<div class="col-sm-12" style="border-bottom: 1px solid #c0c0c0;">'+
                                '<div class="col-sm-11">'+
                                    '<h3><i class="glyphicon glyphicon-user"></i>'+data.owner+ '</h3>'+
                                '</div>'+
                                '<hr/>'+          
                            '</div>'+
                            
                            '<div class="col-sm-12">'+
                                '<p style="word-wrap: break-word; ">'+data.news;+ '</p>'+
                                
                            '</div>'+
                            '<div class="col-sm-12">'+
                                '<h4 class="col-sm-7">'+ data.name; +'</h4>'+
                            '</div>'+
                            '<div class="col-sm-12">'+
                                '<div class="col-sm-2">'+
                                   '<p>' + data.date; +'</p> '+
                                '</div>'+
                                '<div class="col-sm-2">'+
                                    '<p>' + data.time; +'</p>'+
                                '</div> '+
                                '<div class="col-sm-1 col-sm-offset-7">'+
                                    '<i class="glyphicon glyphicon-thumbs-up"></i>'+
                                '</div> '+
                            '</div>'+
                            
                        '</div>'+
                    '</li>'
                $('#showdata').html(html);*/

                $('[id="pUser"]').val(data.owner);
                $('[id="pNews"]').val(data.news);
                $('[id="pName"]').val(data.name);
                $('[id="pDate"]').val(data.date);
                $('[id="pTime"]').val(data.time);
            },
            error: function(){
                alert('Could not get Data from Database');
            }
        });
    });

</script>

