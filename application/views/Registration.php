
    <div class="container" style="padding-top:10px;">    
    <div class="col-sm-6 col-sm-offset-3" style="background-color: #fff; border:1px solid #dddfe2; margin-top:10px; margin-bottom: 40px; border-radius: 4px;">
        <h1>Create a new account</h1>
        <hr />
        <div class="form-horizontal">
        <form action="<?php echo base_url('SignUp_c/submit') ?>" id="form" method="post">
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">First Name</lable>
            <div class="col-md-9">
                <input id="txtFName" name="txtFName" class="form-control" type="text" placeholder="First Name"/>
            </div>
        </div>
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">Last Name</lable>
            <div class="col-md-9">
                <input id="txtLName" name="txtLName" class="form-control" type="text" placeholder="Last Namee"/>
            </div>
        </div>
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">Email</lable>
            <div class="col-md-9">
                <input id="txtEmail" name="txtEmail" class="form-control" type="Email" placeholder="Email"/>
                
            </div>
        </div>
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">University</lable>
            <div class="col-md-9">
                <input id="txtUniversity" name="txtUniversity" class="form-control" type="text" placeholder="University"/>
                
            </div>
        </div>
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">University Code</lable>
            <div class="col-md-9">
                <input id="txtUniCode" name="txtUniCode" class="form-control" type="text" placeholder="University Code"/>
                
            </div>
        </div>
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">User Name</lable>
            <div class="col-md-9">
                <input id="txtUName" name="txtUName" class="form-control" type="text" placeholder="User Name"/>
                
            </div>
        </div>
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">Password</lable>
            <div class="col-md-9">
                <input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="Password"/>
                
            </div>  
        </div>
        <div class="form-group">
            <lable class="col-md-3 control-label" Font-Bold="true">Confirm password</lable>
            <div class="col-md-9">
                <input id="txtConfirmPassword"  type="password" class="form-control" placeholder="Confirm Password"/>
            </div>
        </div>
        </form>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-10">
              <div class="alert alert-success" style="display: none;">
        
              </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
                <button onclick="save();" class="btn btn-default" ToolTip="Save Registration Details" >Register</button>
                <input type="reset" name="clear" value="Clear" class="btn btn-default"/>
            </div>
        </div>
        
        <div class="col-md-10">
            <p><a href="<?php echo base_url('Login_c'); ?>">Login, All Ready You Have Account?</a></p>
        </div>
        </div>
    </div>
</div>

<script>
    function save()
    {
      //alert('OK');
      var url = $('#form').attr('action');
      var data = $('#form').serialize();

       //ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: data,
            dataType: "JSON",
            async: false,
            success: function(data)
            {
              $('.alert-success').html('Registration Successfully').fadeIn().delay(4000).fadeOut('slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    /*$(function(){
      $("#txtUniversity").keyup(function(){
          if($("#txtUniversity").val().length>3)
          {
            $.ajax({
               type: "post",
               url: "<?php echo base_url() ?>Admin_c/showUni",
               cache: false,    
               data:'search='+$("#txtUniversity").val(),
               success: function(response){
                $('#finalResult').html("");
                var obj = JSON.parse(response);
                if(obj.length>0){
                  try{
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
                 $('#finalResult').html($('<li/>').text("No Data Found"));  
                }  
                
               },
               error: function(){      
                alert('Error while request..');
               }
            });
          }
          return false;
        });
    }*/
</script>