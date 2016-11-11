<!DOCTYPE html>
<html>
    <head>
        <title>Email activation</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            body {
              background-image: url('/Login/assets/img/image2.jpg');
              background-size: cover;
              background-repeat: no-repeat;
              font-family: Arial, sans-serif;
              font-weight: bold;
              font-size: 14px;
            }
        </style>

    </head>
    <body>
        <div class="container">

            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                <br><br> <h2 style="color:red">Please activate your account</h2>
                <img src="http://www.languagezone.cz/images/Icon-warning.png">
                <br>
                <br>
                <h3 style="color:#red">A link has been already sent to your mail</h3>
                <a href="<?php echo base_url();?>index.php/login" class="btn btn-danger" >login</a>
                <br><br>
                </div>
                
            </div>
        </div>
    </body>
</html>