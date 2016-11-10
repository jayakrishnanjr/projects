<!DOCTYPE html>
<html>
    <head>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
        nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
        nav.navbar-findcond a { color: #f14444; }
        nav.navbar-findcond ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
        nav.navbar-findcond ul.navbar-nav a:hover,
        nav.navbar-findcond ul.navbar-nav a:visited,
        nav.navbar-findcond ul.navbar-nav a:focus,
        nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
        nav.navbar-findcond ul.navbar-nav a:hover { border-color: #f14444; }
          
    </style>
    </head>
    <body>
        <nav class="navbar navbar-findcond navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php/home">example.com</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url();?>index.php/logout">logout<span class="sr-only">(current)</span></a></li>
                  </ul>  
                </div>
            </div>
        </nav>
    </body>
</html>
