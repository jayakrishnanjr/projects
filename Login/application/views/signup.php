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
        </style>
    </head>
    <body>
        <div class="container">
            <!-- Login block -->
            <div class="row login_block form-group">
                <div class="col-md-4 col-md-offset-4">
                    <form method="POST" action="<?php echo base_url();?>index.php/signup">
                        <!-- Username input box -->
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" 
                            placeholder="Username"  id="email">
                        <br>
                        <!-- Password input box -->
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" 
                            placeholder="Password"  id="password">
                        <br>
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirmpassword" 
                            placeholder="confirm Password"  id="password">
                        <br>
                        <!-- Button -->
                        <input class="btn btn-success btn-block" type="submit" id="submit" value="sign up">
                    </form>
                </div>
            </div>
            <div id="row5" class="row" align="center" style="color:red"> 
                <?php echo validation_errors(); ?>
            </div>  
        </div>
    </body>
</html>