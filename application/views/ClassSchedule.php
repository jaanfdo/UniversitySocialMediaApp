<?php
//if (isset($this->session->userdata['LoginDetails'])) {
//header("location: http://localhost/FinalYearProject/ClassSchedule_c");
//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Class Schedule</title>
</head>
<body>

<div class="container" id="addtocart">
	<div class="col-sm-12 menuname">
    	<div class="line-header">
        	<h1 class="text-center">Your Class Schedule</h1>
        </div>    	
    </div>
    <div class="col-sm-12" style="margin-bottom: 15px; margin-top: 15px;">
        <div class="form-group">
            <div class="col-sm-2">
            <button class="btn btn-success" id="btnAdd" ><i class="glyphicon glyphicon-plus"></i> Add Book</button>
            </div>
            <lable  class="col-sm-1 col-sm-offset-3 control-label" Font-Bold="true">Search</lable>
            <div class="col-sm-2">
                <select name="cmbSearch"  id="cmbSearch" class="form-control">
                  <option value="batchno" selected="true">Batch</option>
                  <option value="course">Course</option>
                  <option value="subjects">Subject</option>
                </select>
            </div>
            <div class="col-sm-3">
                <input type="Text" name="txtSearch"  id="txtSearch" placeholder="Search..." class="form-control" />
            </div>
            <div class="col-sm-1">
                <button  class="btn btn-info" id="btnSearch" ><i class="glyphicon glyphicon-search"></i>Search</button>
            </div>
        </div> 
    </div>
    <form action="" method="post" name="addtocart" enctype="multipart/form-data">
    <div class="col-sm-12">
    	<label class="col-sm-6 control-label" hidden="true">Course Name : <?php //echo ; ?></label>
    	<label class="col-sm-6 control-label" hidden="true">Student Name : <?php //echo ; ?></label>
        <label class="col-sm-6 control-label" hidden="true">Registration No : <?php //echo ; ?></label>
    </div>


    <div class="col-sm-12">
	<table class="table">
        <tr>
        	<th>Course</th>
            <th>Batch No</th>
            <th>Subject</th>
            <th>Lecturer</th>
            <th>Date</th>
            <th>Time</th>
            <th>Class Floor</th>
            <th>Class No</th>
            <th>Action</th>
            
        </tr>      
        <tbody id=showData>
            
        </tbody>             
       <?php
			/*if($data){?>
            <?php 
           foreach ($data as $items){ 
        ?>
        <tr>
        	<td><span ><?php echo $items->subjects;  ?></span> </td>
            <td><span ><?php echo $items->date;  ?> </td>
            <td><span class="blue"><?php echo $items->time;  ?> </span></td>
            <td><span class="blue"><?php echo $items->class_floor;  ?> </span></td>
            <td><span class="blue"><?php echo $items->class_no;  ?> </span></td>
            <td><span class="blue"><?php echo $items->lecturer;  ?> </span></td>
        </tr> 
        <?php } } */?>
    </table>               
    </div>               
      
    </form>
    <div class="col-sm-12">
        <div class="alert alert-success" style="display: none;">
        
        </div>
    </div>
    <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 15px;">
        <div class="form-group">
            <lable  class="col-sm-2 col-sm-offset-3 control-label" Font-Bold="true">Get Previous Data</lable>
            <div class="col-sm-3">
                <input type="Date" name="dtpFromDate"  id="dtpFromDate" class="form-control" />
            </div>
            <div class="col-sm-3">
                <input type="Date" name="dtpToDate"  id="dtpToDate" class="form-control" />
            </div>
            <div class="col-sm-1">
                <button id="btnPreviousData" class="btn btn-info" ToolTip="To Search" >Previous Data</button>
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Modal title</h3>
      </div>
      <div class="modal-body">
        <form id="myForm" action="" method="post" class="form-horizontal">
            <input type="hidden" name="txtId" value="0">
            <input type="hidden" name="txtOwner" value="janith" >
            <div class="form-group">
              <label class="control-label col-md-3">Course</label>
              <div class="col-md-9">
                <input name="txtCourse" id="txtCourse" placeholder="Course" class="form-control" type="text">
                <ul id="finalResult" style="display: none;"></ul>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Batch No</label>
              <div class="col-md-9">
                    <input name="txtBatchNo" placeholder="Batch No" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Subject</label>
              <div class="col-md-9">
                    <input name="txtSubject" id="txtSubject" placeholder="Subject" class="form-control" type="text">
                    <ul id="finalResult2" style="display: none;"></ul>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Lecturer</label>
              <div class="col-md-9">
                    <input name="txtLecturer" placeholder="Lecturer" class="form-control" type="text">
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
                <label class="control-label col-md-3">Class Floor</label>
                <div class="col-md-9">
                    <input name="txtClassFloor" placeholder="Class Floor" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Class No.</label>
                <div class="col-md-9">
                    <input name="txtClassNo" placeholder="Class No" type="text" class="form-control">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
            Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
    $(function(){
        showAll();

        //Add New
       $('#btnAdd').click(function(){
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Add New Class Schedule');
            $('#myForm').attr('action', '<?php echo base_url() ?>ClassSchedule_c/add');
        });

        $('#btnSave').click(function(){
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();


                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if(response.type=='add'){
                                var type = 'Added'
                            }else if(response.type=='update'){
                                var type ="Updated"
                            }
                            $('.alert-success').html('Class Schedule '+type+' Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll();
                        }else{
                            alert('Error');
                        }
                    },
                    error: function(){
                        alert('Could not add data');
                    }
                });     
        });

        //edit
        $('#showData').on('click', '.item-edit', function(){
            var id = $(this).attr('data');
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Edit Class Schedule');
            $('#myForm').attr('action', '<?php echo base_url() ?>ClassSchedule_c/update');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>ClassSchedule_c/edit',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtId]').val(data.id);
                    $('input[name=txtCourse]').val(data.course);
                    $('input[name=txtSubject]').val(data.subjects);
                    $('input[name=txtBatchNo]').val(data.batchno);
                    $('input[name=dtpDate]').val(data.date);
                    $('input[name=dtpTime]').val(data.time);
                    $('input[name=txtLecturer]').val(data.lecturer);
                    $('input[name=txtClassFloor]').val(data.class_floor);
                    $('input[name=txtClassNo]').val(data.class_no);
                    $('input[name=txtOwner]').val(data.Owner);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        //delete- 
        $('#showData').on('click', '.item-delete', function(){
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>ClassSchedule_c/delete',
                    data:{id:id},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Class Schedule Deleted Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll();
                        }else{
                            alert('Error');
                        }
                    },
                    error: function(){
                        alert('Error deleting');
                    }
                });
            });
        });

        //function
        $('#btnSearch').click(function(){
            //$('#myModal').modal('show');
            var search = $('#cmbSearch').val();
            var filter = $('#txtSearch').val();
            //alert('ok');
            //alert(filter + " / " + search);
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>ClassSchedule_c/search',
                data: {search: search, filter: filter},
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
                            '<td>'+data[i].date+'</td>'+
                            '<td>'+data[i].time+'</td>'+
                            '<td>'+data[i].class_floor+'</td>'+
                            '<td>'+data[i].class_no+'</td>'+
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
        });

        $("#txtSearch").keyup(function(){
          if($("#txtSearch").val().length <= 0){
              showAll();
          }
          return false;
        });

        //function
        $('#btnPreviousData').click(function(){
            var from = $('input[name=dtpFromDate]').val();
            var to = $('input[name=dtpToDate]').val();
            //alert('ok');
            //alert(from + " / " + to);
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>ClassSchedule_c/previousData',
                data: {from: from, to: to},
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
                            '<td>'+data[i].date+'</td>'+
                            '<td>'+data[i].time+'</td>'+
                            '<td>'+data[i].class_floor+'</td>'+
                            '<td>'+data[i].class_no+'</td>'+
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
        });

        $("#txtCourse").keyup(function(){
          if($("#txtCourse").val().length>3){
              $.ajax({
               type: "post",
               url: "<?php echo base_url() ?>Admin_c/viewCourse",
               cache: false,    
               data:'search='+$("#txtCourse").val(),
               success: function(response){
                $('#finalResult').html("");
                var obj = JSON.parse(response);
                if(obj.length > 0){
                try
                {
                    $('#finalResult').show();
                    var items=[];  
                    $.each(obj, function(i,val){           
                      items.push($('<li/>').text(val.university));
                    }); 
                     $('#finalResult').append.apply($('#finalResult'), items);
                    }
                    catch(e) 
                    {  
                     alert('Exception while request..');
                    }  
                }
                else
                {
                    $('#finalResult').show();
                    $('#finalResult').html($('<li/>').text("No Data Found"));  
                }  
                
               },
               error: function(){      
                alert('Error while request..');
               }
              });
          }
          else if ($("#txtCourse").val().length == 0) {
            $('#finalResult').hide();
          }
          return false;
        });

        $("#txtSubject").keyup(function(){
          if($("#txtSubject").val().length>3){
              $.ajax({
               type: "post",
               url: "<?php echo base_url() ?>Admin_c/viewSubject",
               cache: false,    
               data:'search='+$("#txtSubject").val(),
               success: function(response){
                $('#finalResult2').html("");
                var obj = JSON.parse(response);
                if(obj.length > 0){
                try
                {
                    $('#finalResult2').show();
                    var items=[];  
                    $.each(obj, function(i,val){           
                      items.push($('<li/>').text(val.university));
                    }); 
                     $('#finalResult2').append.apply($('#finalResult2'), items);
                    }
                    catch(e) 
                    {  
                     alert('Exception while request..');
                    }  
                }
                else
                {
                    $('#finalResult2').show();
                    $('#finalResult2').html($('<li/>').text("No Data Found"));  
                }  
                
               },
               error: function(){      
                alert('Error while request..');
               }
              });
          }
          else if ($("#txtSubject").val().length == 0) {
            $('#finalResult2').hide();
          }
          return false;
        });

        /*function search()
        {
            var search = $('input[name=cmbSearch]').value();
            var filter = $('input[name=txtSearch]').value();
            alert(search +" / "+ filter);

          save_method = 'update';
          $('#form')[0].reset(); // reset form on modals
     
          //Ajax Load data from ajax
          $.ajax({
            url : "<?php //echo site_url('events_c/edit/')?>" + id,
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
                
     
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
     
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
            });

        }*/

        
        //function
        function showAll(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>ClassSchedule_c/showAll',
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
                            '<td>'+data[i].date+'</td>'+
                            '<td>'+data[i].time+'</td>'+
                            '<td>'+data[i].class_floor+'</td>'+
                            '<td>'+data[i].class_no+'</td>'+
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
        }
    });
</script>
</body>
</html>