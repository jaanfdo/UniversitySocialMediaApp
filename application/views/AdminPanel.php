<?php
//session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Schedules</title>
</head>
<body>

<div class="container-fluid">

<div class="col-sm-12">
    <div class="col-sm-2 nav-pills-m">
        <h3>Schedules</h3>
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-divider"></li>
            <li role="presentation" class="active"><a href="#Uni" role="tab" data-toggle="tab">University</a></li>
            <li class="nav-divider"></li>
            <li role="presentation"><a href="#Branch" role="tab" data-toggle="tab">University Branch</a></li>
            <li class="nav-divider"></li> 
            <li role="presentation"><a href="#Course" role="tab" data-toggle="tab">Courses</a></li>
            <li class="nav-divider"></li> 
            <li role="presentation"><a href="#Batch" role="tab" data-toggle="tab">Batches</a></li>
            <li class="nav-divider"></li> 
            <li role="presentation"><a href="#Subject" role="tab" data-toggle="tab">Subjects</a></li>
            <li class="nav-divider"></li>       
        </ul>
    </div>
    <div class="col-sm-10">
        <div class="tab-content">                        
            <div role="tabpanel" class="tab-pane fade active" id="Uni">
                <div class="col-sm-12 menuname">
                    <div class="line-header">
                        <h1 class="text-center">University</h1>
                    </div>      
                </div>
                <div class="col-sm-12">
                    <div class="alert alert-success" style="display: none;">
        
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="col-sm-7">
                        <form action="" method="post" name="class" >
                        <table class="table">
                            <tr>
                                <th>University</th>
                                <th>University Code</th>
                                <th></th>            
                            </tr>      
                            <tbody id=showData>
                                
                            </tbody>             
                        </table>                              
                        </form>
                    </div>
                    <div class="col-sm-5">
                        <form id="FormUniversity" action="<?php echo base_url('Admin_c/addUni')?>" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">                        
                        <div class="form-group">
                          <label class="control-label col-md-3">University</label>
                          <div class="col-md-9">
                            <input name="txtUni" id="txtUni" placeholder="University" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">University Code</label>
                          <div class="col-md-9">
                                <input name="txtUniCode" id="txtUniCode" placeholder="University Code" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group pull-right">
                            <button type="button" id="btnSaveUni" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Branch">
                <div class="col-sm-12 menuname">
                    <div class="line-header">
                        <h1 class="text-center">University Branches</h1>
                    </div>      
                </div>
                <div class="col-sm-12">
                    <div class="alert alert-success" style="display: none;">
        
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-7">
                    <form action=" " method="post" name="class" enctype="multipart/form-data">                 
                    <table class="table">
                        <tr>
                            <th>University</th>
                            <th>Branch Code</th>
                            <th>Branch</th>
                            <th></th>            
                        </tr>      
                        <tbody id=showData2>
                            
                        </tbody>             
                    </table>                              
                    </form>
                    </div>
                    <div class="col-sm-5">
                        <form id="FormBranch" action="<?php echo base_url('Admin_c/addBranch')?>" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">                        
                        <div class="form-group">
                          <label class="control-label col-md-3">University</label>
                          <div class="col-md-9">
                            <input name="txtUni" id="txtUni" placeholder="University" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Branch Code</label>
                          <div class="col-md-9">
                                <input name="txtBranchCode" id="txtBranchCode" placeholder="Branch Code" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Branch</label>
                          <div class="col-md-9">
                                <input name="txtBranch" id="txtBranch" placeholder="Branch" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group pull-right">
                            <button type="button" id="btnSaveBranch" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Course">
                <div class="col-sm-12 menuname">
                    <div class="line-header">
                        <h1 class="text-center">Courses</h1>
                    </div>      
                </div>
                <div class="col-sm-12">
                    <div class="alert alert-success" style="display: none;">
        
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-7">
                    <form action="" method="post" name="class" enctype="multipart/form-data">
                 
                    <table class="table">
                        <tr>
                            <th>University</th>
                            <th>Course Code</th>
                            <th>Course</th>
                            <th>Course Prefix</th>
                            <th></th>           
                        </tr>      
                        <tbody id=showData3>
                            
                        </tbody>             
                    </table>                              
                    </form>
                    </div>
                    <div class="col-sm-5">
                        <form id="FormCourse" action="<?php echo base_url('Admin_c/addCourse')?>" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">                        
                        <div class="form-group">
                          <label class="control-label col-md-3">University</label>
                          <div class="col-md-9">
                            <input name="txtUni" id="txtUni" placeholder="University" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Course Code</label>
                          <div class="col-md-9">
                                <input name="txtCourseCode" placeholder="Course Code" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Course</label>
                          <div class="col-md-9">
                                <input name="txtCourse" placeholder="Course" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Course Prefix</label>
                          <div class="col-md-9">
                                <input name="txtCoursePrx" placeholder="Course Prefix " class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group pull-right">
                            <button type="button" id="btnSaveCourse" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Batch">
                <div class="col-sm-12 menuname">
                    <div class="line-header">
                        <h1 class="text-center">Batch</h1>
                    </div>      
                </div>
                <div class="col-sm-12">
                    <div class="alert alert-success" style="display: none;">
        
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-7">
                    <form action="" method="post" name="class" enctype="multipart/form-data">
                 
                    <table class="table">
                        <tr>
                            <th>University</th>
                            <th>Course</th>
                            <th>Batch No</th>
                            <th>Start Semester</th>
                            <th></th>            
                        </tr>      
                        <tbody id=showData4>
                            
                        </tbody>             
                    </table>                              
                    </form>
                    </div>
                    <div class="col-sm-5">
                        <form id="FormBatch" action="<?php echo base_url('Admin_c/addBatch')?>" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">                        
                        <div class="form-group">
                          <label class="control-label col-md-3">University</label>
                          <div class="col-md-9">
                            <input name="txtUni" id="txtUni" placeholder="University" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Course</label>
                          <div class="col-md-9">
                                <input name="txtCourseID" placeholder="Course" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Batch No</label>
                          <div class="col-md-9">
                                <input name="txtBatchNo" placeholder="Batch No" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Start Semester</label>
                          <div class="col-md-9">
                                <input name="dtpStartDate" placeholder="Start Semester" class="form-control" type="Date">
                          </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="button" id="btnSaveBatch" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Subject">
               <div class="col-sm-12 menuname">
                    <div class="line-header">
                        <h1 class="text-center">Subject</h1>
                    </div>      
                </div>   
                <div class="col-sm-12">
                    <div class="alert alert-success" style="display: none;">
        
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-7">
                    <form action="" method="post" name="exam" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <th>University</th>
                            <th>Course</th>
                            <th>Subject Code</th>
                            <th>Subject</th>
                            <th>Subject Prefix</th>
                            <th></th>
                        </tr>
                        <tbody id=showData5>
                            
                        </tbody>   
                    </table>                              
                      
                    </form>
                    </div>
                    <div class="col-sm-5">
                        <form id="FormSubject" action="<?php echo base_url('Admin_c/addSubject')?>" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">                        
                        <div class="form-group">
                          <label class="control-label col-md-3">University</label>
                          <div class="col-md-9">
                           <input name="txtUni" id="txtUni" placeholder="University" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Course</label>
                          <div class="col-md-9">
                                <input name="txtCourseID" placeholder="Course" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Subject Code</label>
                          <div class="col-md-9">
                                <input name="txtSubjectCode" placeholder="Subject Code" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Subject</label>
                          <div class="col-md-9">
                                <input name="txtSubject" placeholder="Subject" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Subject Prefix</label>
                          <div class="col-md-9">
                                <input name="txtSubjectPrx" placeholder="Subject Prefix" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="form-group pull-right">
                            <button type="button" id="btnSaveSubject" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

</div>

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
        showAll2();
        showAll3();
        showAll4();
        showAll5();


        $('#btnSaveUni').click(function(){
            var url = $('#FormUniversity').attr('action');
            var data = $('#FormUniversity').serialize();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            if(response.type=='add'){
                                var type = 'Added'
                            }else if(response.type=='update'){
                                var type ="Updated"
                            }
                            $('.alert-success').html('University '+type+' Successfully').fadeIn().delay(4000).fadeOut('slow');
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
        $('#btnSaveBranch').click(function(){
            var url = $('#FormBranch').attr('action');
            var data = $('#FormBranch').serialize();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            if(response.type=='add'){
                                var type = 'Added'
                            }else if(response.type=='update'){
                                var type ="Updated"
                            }
                            $('.alert-success').html('University Branch '+type+' Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll2();
                        }else{
                            alert('Error');
                        }
                    },
                    error: function(){
                        alert('Could not add data');
                    }
                });     
        });
        $('#btnSaveCourse').click(function(){
            var url = $('#FormCourse').attr('action');
            var data = $('#FormCourse').serialize();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            if(response.type=='add'){
                                var type = 'Added'
                            }else if(response.type=='update'){
                                var type ="Updated"
                            }
                            $('.alert-success').html('Course '+type+' Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll3();
                        }else{
                            alert('Error');
                        }
                    },
                    error: function(){
                        alert('Could not add data');
                    }
                });     
        });
        $('#btnSaveBatch').click(function(){
            var url = $('#FormBatch').attr('action');
            var data = $('#FormBatch').serialize();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            if(response.type=='add'){
                                var type = 'Added'
                            }else if(response.type=='update'){
                                var type ="Updated"
                            }
                            $('.alert-success').html('Batch '+type+' Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll4();
                        }else{
                            alert('Error');
                        }
                    },
                    error: function(){
                        alert('Could not add data');
                    }
                });     
        });
        $('#btnSaveSubject').click(function(){
            var url = $('#FormSubject').attr('action');
            var data = $('#FormSubject').serialize();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            if(response.type=='add'){
                                var type = 'Added'
                            }else if(response.type=='update'){
                                var type ="Updated"
                            }
                            $('.alert-success').html('Subject '+type+' Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll5();
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
            $('#FormUniversity').attr('action', '<?php echo base_url() ?>Admin_c/updateuni/');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>Admin_c/edituni/',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtUni]').val(data.university);
                    $('input[name=txtUniCode]').val(data.unicode);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        $('#showData2').on('click', '.item-edit', function(){
            var id = $(this).attr('data');
            $('#FormBranch').attr('action', '<?php echo base_url() ?>Admin_c/updatebranch/');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>Admin_c/editbranch',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtUniversity]').val(data.university);
                    $('input[name=txtBranchCode]').val(data.branchcode);
                    $('input[name=txtBranch]').val(data.branch);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        $('#showData3').on('click', '.item-edit', function(){
            var id = $(this).attr('data');
            $('#FormCourse').attr('action', '<?php echo base_url() ?>Admin_c/updatecourse/');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>Admin_c/editcourse',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtUni]').val(data.id);
                    $('input[name=txtCourseCode]').val(data.course);
                    $('input[name=txtCourse]').val(data.subjects);
                    $('input[name=txtCoursePrx]').val(data.batchno);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        $('#showData4').on('click', '.item-edit', function(){
            var id = $(this).attr('data');
            $('#FormBatch').attr('action', '<?php echo base_url() ?>Admin_c/updatebatch');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>Admin_c/editbatch',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtUni]').val(data.id);
                    $('input[name=txtCourseIDu]').val(data.course);
                    $('input[name=txtBatchNo]').val(data.subjects);
                    $('input[name=dtpStartDate]').val(data.batchno);
                },
                error: function(){
                    alert('Could not Edit Data');
                }
            });
        });

        $('#showData5').on('click', '.item-edit', function(){
            var id = $(this).attr('data');
            $('#FormSubject').attr('action', '<?php echo base_url() ?>Admin_c/updatesubject');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>Admin_c/editsubject',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data){
                    $('input[name=txtUni]').val(data.id);
                    $('input[name=txtCourseID]').val(data.course);
                    $('input[name=txtSubjectCode]').val(data.subjects);
                    $('input[name=txtSubject]').val(data.batchno);
                    $('input[name=txtSubjectPrx]').val(data.date);
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
                    url: '<?php echo base_url() ?>Admin_c/deleteuni/',
                    data:{id:id},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('University Deleted Successfully').fadeIn().delay(4000).fadeOut('slow');
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

        $('#showData2').on('click', '.item-delete', function(){
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>Admin_c/deletebranch/',
                    data:{id:id},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('University Branch Deleted Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll2();
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

        $('#showData3').on('click', '.item-delete', function(){
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>Admin_c/deletecourse/',
                    data:{id:id},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Course Deleted Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll3();
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

        $('#showData4').on('click', '.item-delete', function(){
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>Admin_c/deletebatch/',
                    data:{id:id},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Batch Deleted Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll4();
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

        $('#showData5').on('click', '.item-delete', function(){
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function(){
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>Admin_c/deletesubject/',
                    data:{id:id},
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Subject Deleted Successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAll5();
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
        function showAll(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Admin_c/showUni',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].university+'</td>'+
                            '<td>'+data[i].unicode+'</td>'+
                            '<td>'+
                                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'"><i class="glyphicon glyphicon-pencil"></i></a>'+
                                    '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'"><i class="glyphicon glyphicon-remove"></i></a>'+
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

        function showAll2(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Admin_c/showBranch',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].university+'</td>'+
                            '<td>'+data[i].branch+'</td>'+
                            '<td>'+data[i].branchcode+'</td>'+
                            '<td>'+
                                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'"><i class="glyphicon glyphicon-pencil"></i></a>'+
                                    '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'"><i class="glyphicon glyphicon-remove"></i></a>'+
                            '</td>'+
                        '</tr>';
                    }
                    $('#showData2').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
                }
            });
        }

        function showAll3(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Admin_c/showCourse',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].university+'</td>'+
                            '<td>'+data[i].coursecode+'</td>'+
                            '<td>'+data[i].course+'</td>'+
                            '<td>'+data[i].courseprx+'</td>'+
                            '<td>'+
                                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'"><i class="glyphicon glyphicon-pencil"></i></a>'+
                                    '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'"><i class="glyphicon glyphicon-remove"></i></a>'+
                            '</td>'+
                        '</tr>';
                    }
                    $('#showData3').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
                }
            });
        }

        function showAll4(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Admin_c/showBatch',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].university+'</td>'+
                            '<td>'+data[i].course+'</td>'+
                            '<td>'+data[i].batchno+'</td>'+
                            '<td>'+data[i].startsemester+'</td>'+
                            '<td>'+
                                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'"><i class="glyphicon glyphicon-pencil"></i></a>'+
                                    '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'"><i class="glyphicon glyphicon-remove"></i></a>'+
                            '</td>'+
                        '</tr>';
                    }
                    $('#showData4').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
                }
            });
        }

        function showAll5(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Admin_c/showSubjects',
                async: false,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+
                            '<td>'+data[i].university+'</td>'+
                            '<td>'+data[i].course+'</td>'+
                            '<td>'+data[i].subjectscode+'</td>'+
                            '<td>'+data[i].subjects+'</td>'+
                            '<td>'+data[i].subjectprx+'</td>'+
                            '<td>'+
                                    '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'"><i class="glyphicon glyphicon-pencil"></i></a>'+
                                    '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'"><i class="glyphicon glyphicon-remove"></i></a>'+
                            '</td>'+
                        '</tr>';
                    }
                    $('#showData5').html(html);
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