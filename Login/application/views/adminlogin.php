 <!DOCTYPE html>
<html>
    <head>
        <title>login</title>

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
                padding-left: 150px;
                padding-right: 150px;
            }
            
            nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
            nav.navbar-findcond a { color: #f14444; }f; }    
        </style>
    </head>
    <body>
        <nav class="navbar navbar-findcond navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php/login">example.com</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <!-- Login block -->
            <div class="row login_block form-group">
                <div class="col-md-4 col-md-offset-4" class="">
                    <div class="form-signin">
                        <form method="POST" action="<?php echo base_url();?>index.php/adminhome">
                            <!-- email input box -->
                            <label>email</label>
                            <input type="email" class="form-control" name="email" 
                                placeholder="email"  id="email" value="<?php echo set_value('email');?>" required maxlength="55" data-minlength="7">
                            <br>
                            <!-- Password input box -->
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" 
                                placeholder="Password"  id="password" required maxlength="20" data-minlength="8">
                            <br>
                            <!-- Button -->
                            <input class="btn btn-success btn-block" type="submit" id="submit" value="Login">
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <div id="row5" class="row" align="center" style="color:red"> 
                <?php echo validation_errors(); ?>
                <?php
                echo $this->session->flashdata('errors'); 
                ?>
            </div>
        </div>
    </body>
</html>