<?php
//session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appointment Details</title>
</head>

<body>

<div class="container" id="addtocart">
    <div class="col-sm-12 menuname">
        <div class="line-header">
            <h2 class="text-center">Your Appointment Details</h2>
        </div>      
    </div>
    <div class="col-sm-12" style="margin-bottom: 15px; margin-top: 15px;">
        <div class="form-group">
            <lable  class="col-sm-1 col-sm-offset-5 control-label" Font-Bold="true">Search</lable>
            <div class="col-sm-2">
                <select name="cmbSearch"  id="cmbSearch" class="form-control">
                  <option value="batchno" selected="true">Batch</option>
                  <option value="course">Course</option>
                  <option value="subjects">Subject</option>
                  <option value="Student">Student</option>
                </select>
            </div>
            <div class="col-sm-3">
                <input type="Text" name="txtSearch"  id="txtSearch" placeholder="Search..." class="form-control" />
            </div>
            <div class="col-sm-1">
                <button  name="btnSearch" id="btnSearch" class="btn btn-info" ToolTip="To Login" >Login</button>
            </div>
        </div>
    </div>
    <form action="" method="post" name="addtocart" enctype="multipart/form-data">
    <div class="col-sm-12">
        <label class="col-sm-6 control-label" hidden="true">Lecturer Name : <?php //echo $cartno; ?></label>
        <label class="col-sm-6 control-label" hidden="true">Registration No : <?php //echo $cartdate; ?></label>
    </div>
    
    <table class="table">
        <tr>
            <th>Student Name</th> 
            <th>Course Name</th>  
            <th>Batch No</th>     
            <th>Subject</th>
            <th>Lecturer</th>
            <th>Reason</th>
            <th>Date</th>
            <th>Time</th>
            <th>Response</th>
            <th></th>
        </tr>   
        <tbody id=showData>
            
        </tbody>

       <?php
            /*if($data){?>
            <?php 
           foreach ($data as $items){ 
        ?>
        
        <tr>
            <td><span ><?php echo $items->owner;  ?></span> </td>
            <td><span ><?php echo $items->course;  ?></span> </td>
            <td><span class="blue"><?php echo $items->subjects;  ?> </span></td>
            <td><span class="blue"><?php echo $items->reason;  ?> </span></td>
            <td><span class="blue"><?php echo $items->date;  ?> </span></td>
            <td><span class="blue"><?php echo $items->time;  ?> </span></td>
            <td><span class="blue"><?php echo $items->response;  ?> </span></td>
            <td><i class="glyphicon glyphicon-pencil"></i></td>
        </tr> 
        <?php } } */?>

    </table>                             
      
    </form>
    <div class="col-sm-12">
        <div class="alert alert-success" style="display: none;">
        
        </div>
    </div>
     <div class="col-sm-12" style="margin-bottom: 15px; margin-top: 15px;">
        <div class="form-group">
            <lable  class="col-sm-2 col-sm-offset-3 control-label" Font-Bold="true">Get Previous Data</lable>
            <div class="col-sm-3">
                <input type="Date" name="dtpFromDate"  id="dtpFromDate" class="form-control" />
            </div>
            <div class="col-sm-3">
                <input type="Date" name="dtpToDate"  id="dtpToDate" class="form-control" />
            </div>
            <div class="col-sm-1">
                <button  name="btnPreviousData" id="btnPreviousData" class="btn btn-info" ToolTip="To Search" >Previous Data</button>
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Appointment</h3>
      </div>
      <div class="modal-body">
        <form id="myForm" action="" method="post" class="form-horizontal">
            <input type="hidden" name="txtId" value="0">
            <div class="form-group">
              <label class="control-label col-md-3">Response</label>
              <div class="col-md-9">
                <select name="txtResponse"  id="txtResponse" class="form-control">
                  <option value="new" selected="true">New</option>
                  <option value="accept">Accept</option>
                  <option value="reject">Reject</option>
                </select>
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



<script>
    $(function(){
        showAllEmployee();

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
                            $('.alert-success').html('Appointment Updated Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllEmployee();
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
            $('#myModal').find('.modal-title').text('Edit Appointment');
            $('#myForm').attr('action', '<?php echo base_url() ?>ResponseAppointment_c/update');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>ResponseAppointment_c/edit',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtId]').val(data.id);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

         //function
        $('#btnSearch').click(function(){
            var search = $('#cmbSearch').val();
            var filter = $('#txtSearch').val();
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>ResponseAppointment_c/search',
                data: {search: search, filter: filter},
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].owner+'</td>'+
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

        //function
        $('#btnPreviousData').click(function(){
            var from = $('input[name=dtpFromDate]').val();
            var to = $('input[name=dtpToDate]').val();
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>ResponseAppointment_c/previousData',
                data: {from: from, to: to},
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].owner+'</td>'+
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
        function showAllEmployee(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>ResponseAppointment_c/showAll',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].owner+'</td>'+
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