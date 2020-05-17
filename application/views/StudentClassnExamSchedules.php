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

<div class="container">

<div class="col-sm-12">
    <div class="col-sm-2 nav-pills-m">
        <h3>Schedules</h3>
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-divider"></li>
            <li role="presentation" class="active"><a href="#Class" role="tab" data-toggle="tab">Class Schedule</a></li>
            <li class="nav-divider"></li>
            <li role="presentation"><a href="#Exam" role="tab" data-toggle="tab">Exam Schedule</a></li>
            <li class="nav-divider"></li>       
        </ul>
    </div>
    

    <div class="col-sm-10">
        <div class="tab-content">                        
            <div role="tabpanel" class="tab-pane fade active" id="Class">
                <div class="col-sm-12 menuname">
                    <div class="line-header">
                        <h1 class="text-center">Your Class Schedule</h1>
                    </div>      
                </div>
                <form action="" method="post" name="class" enctype="multipart/form-data">
             
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
                    </tr>      
                    <tbody id=showData>
                        
                    </tbody>             
                </table>                              
                </form>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Exam">
               <div class="col-sm-12 menuname">
                    <div class="line-header">
                        <h1 class="text-center">Your Exam Schedule</h1>
                    </div>      
                </div>   
                <form action="" method="post" name="exam" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Course</th>
                        <th>Batch No</th>
                        <th>Subject</th>
                        <th>Exam Type</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Class Floor</th>
                        <th>Class No</th>
                    </tr>
                    <tbody id=showData2>
                        
                    </tbody>   
                </table>                              
                  
                </form>
            </div>
            
        </div>  
    </div>

</div>
</div>

<script>
    $(function(){
        showAll();
        showAll2();

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
                url: '<?php echo base_url() ?>ExamSchedule_c/showAll',
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
                            '<td>'+data[i].examtype+'</td>'+
                            '<td>'+data[i].date+'</td>'+
                            '<td>'+data[i].time+'</td>'+
                            '<td>'+data[i].class_floor+'</td>'+
                            '<td>'+data[i].class_no+'</td>'+
                        '</tr>';
                    }
                    $('#showData2').html(html);
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