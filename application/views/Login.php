
<div class="container">
<div class="row">        
    <div class="col-sm-6 col-sm-offset-3" style="background-color: #fff; border:1px solid #dddfe2; margin-top:40px; margin-bottom: 40px; border-radius: 4px;">
        <h1>Login</h1>
            <form action="<?php echo base_url('login_c/Login') ?>" method="post">
            <div class="form-horizontal">
                <hr />
                <p class="label label-success" style="font-size:14px;">You have to Access the site then you can Login with System</p>
                <br />
                <br />
                <div class="form-group">
                    <lable  class="col-sm-2 control-label" Font-Bold="true">User Name</lable>
                    <div class="col-sm-10">
                        <input type="Text" name="txtUserName"  id="txtUserName" class="form-control" />
                        <span class="text-danger"><?php  echo form_error('username'); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <lable  class="col-sm-2 control-label" Font-Bold="true">Password</lable>
                    <div class="col-sm-10">
                        <input type="Password" name="txtPass"  id="txtPass" class="form-control" ToolTip="Password" />
                        <span class="text-danger"><?php  echo form_error('pass'); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <input type="checkbox" name="" id="RememberMe" />
                            <lable  AssociatedControlid="RememberMe">Remember me?</lable>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <?php 
                        if($this->session->flashdata('success_msg')){ ?>
                         <p class="alert alert-success"><?php echo $this->session->flashdata('success_msg'); ?> 
                            <a href="<?php echo base_url('Home_c'); ?>" >Goto Home Page</a>
                         </p>
                         
                    <?php  
                        }if($this->session->flashdata('error_msg')){
                            ?>
                        <p class="alert alert-danger"><?php echo $this->session->flashdata('error_msg'); ?></p>
                    <?php } ?> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button  name="txtLogin" class="btn btn-default" ToolTip="To Login" >Login</button>
                    </div>
                </div>
            </div>
            </form>      
            <div class="col-md-4">
            <p><a href="<?php echo base_url('SignUp_c'); ?>" id="RegisterHyperLink" >Register as a new user</a></p>
            </div>
    </div>
</div>
</div>
