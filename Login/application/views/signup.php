<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .login_block
                {
                    margin: 130px 10px 0px 0px;
                } 
            #ahref{
                padding-left: 158px;
                padding-right: 158px;
            } 
            nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
            nav.navbar-findcond a { color: #f14444; }f; }
     
        </style>
    </head>
    <body>
    <nav class="navbar navbar-findcond navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">example.com</a>
            </div>
        </div>
    </nav>
        <div class="container">
            <!-- Login block -->
            <div class="row login_block form-group">
                <div class="col-md-4 col-md-offset-4">
                    <form  data-toggle="validator" role="form" method="POST" action="<?php echo base_url();?>index.php/signup">
                        <!-- email input box -->
                        <label>email</label>
                        <input type="email" class="form-control" name="email" 
                            placeholder="email"  id="email" value="<?php echo $this->session->userdata('email');?>" required maxlength="55" data-minlength="8">
                        <br>
                        <!-- Password input box -->
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" 
                            placeholder="Password"  id="password" required maxlength="20" data-minlength="8">
                        <br>
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirmpassword" 
                            placeholder="confirm Password"  id="password" required maxlength="20" data-minlength="8" data-match="#password" data-match-error="Whoops,Password don't match">
                        <br>
                        <!-- Button -->
                        <input class="btn btn-success btn-block" type="submit" id="submit" value="sign up">
                        <br>
                        <!-- Button -->
                        <a href="<?php echo base_url();?>index.php/login" class="btn btn-primary" 
                            align="center" id="ahref">login</a>
                        <br>
                    </form>
                </div>
            </div>
            <div id="row5" class="row" align="center" style="color:red"> 
                <?php
                echo $this->session->flashdata('error'); 
                ?>
            </div> 
        </div>
    </body>
</html>