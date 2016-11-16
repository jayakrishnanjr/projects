<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
    </head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- bootstarp validator css -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

        body {
            background: lightgray;
        }

        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px;
            
        }

        .navbar-default .navbar-nav #user-profile {
            height: 50px;
            padding-top: 15px;
            padding-left: 58px;
        }

        .navbar-default .navbar-nav #user-profile img {
            height: 45px;
            width: 45px;
            position: absolute;
            top: 2px;
            left: 8px;
            padding: 1px;
        }

        #wrapper {
            padding-top: 50px;
            padding-left: 0;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }

        @media (min-width: 992px) {
            #wrapper {
                padding-left: 225px;
            }
        }

        @media (min-width: 992px) {
            #wrapper #sidebar-wrapper {
                width: 225px;
            }
        }

        #sidebar-wrapper {
            border-right: 1px solid #e7e7e7;
        }

        #sidebar-wrapper {
            z-index: 1000;
            position: fixed;
            left: 225px;
            width: 0;
            height: 100%;
            margin-left: -225px;
            overflow-y: auto;
            background: #f8f8f8;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }

        #sidebar-wrapper .sidebar-nav {
            position: absolute;
            top: 0;
            width: 225px;
            font-size: 14px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #sidebar-wrapper .sidebar-nav li {
            text-indent: 0;
            line-height: 45px;
        }

        #sidebar-wrapper .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: #428bca;
        }

        .sidebar-nav li:first-child a {
            background: #92bce0 !important;
            color: #fff !important;
        }

        #sidebar-wrapper .sidebar-nav li a .sidebar-icon {
            width: 45px;
            height: 45px;
            font-size: 14px;
            padding: 0 2px;
            display: inline-block;
            text-indent: 7px;
            margin-right: 10px;
            color: #fff;
            float: left;
        }

        #sidebar-wrapper .sidebar-nav li a .caret {
          position: absolute;
          right: 23px;
          top: auto;
          margin-top: 20px;
        }

        #sidebar-wrapper .sidebar-nav li ul.panel-collapse {
            list-style: none;
            -moz-padding-start: 0;
            -webkit-padding-start: 0;
            -khtml-padding-start: 0;
            -o-padding-start: 0;
            padding-start: 0;
            padding: 0;
        }

        #sidebar-wrapper .sidebar-nav li ul.panel-collapse li i {
            margin-right: 10px;
        }

        #sidebar-wrapper .sidebar-nav li ul.panel-collapse li {
            text-indent: 15px;
        }

        @media (max-width: 992px) {
            #wrapper #sidebar-wrapper {
                width: 45px;
            }
            #wrapper #sidebar-wrapper #sidebar #sidemenu li ul {
                position: fixed;
                left: 45px;
                margin-top: -45px;
                z-index: 1000;
                width: 200px;
                height: 0;
            }
        }

        .sidebar-nav li:first-child a {
            background: #92bce0 !important;
            color: #fff !important;
        }

        .sidebar-nav li:nth-child(2) a {
            background: #6aa3d5 !important;
            color: #fff !important;
        }

        .sidebar-nav li:nth-child(3) a {
            background: #428bca !important;
            color: #fff !important;
        }

        .sidebar-nav li:nth-child(4) a {
            background: #3071a9 !important;
            color: #fff !important;
        }

        .sidebar-nav li:nth-child(5) a {
            background: #245682 !important;
            color: #fff !important;
        }
        .ex-testimonial{background:#c5ced8;padding:10px;border-radius:6px; margin:25px 15px 0px 15px;}
        .ex-testimonial-inner{background:#fff;padding:10px;border-radius:3px;}
        .example-thumb{width:40px; display:inline-block; vertical-align:top;}
        .example-name{display:inline-block; margin:0px; font-family:Helvetica, Arial, Sans-serif; font-weight:700; color:#3b5998;}
        .example-date a{color:#9197a3; font-size:12px; font-weight:500; text-decoration:underline;}
        .example-date {color:#9197a3; font-size:12px; font-weight:500;}
        .fa.fa-caret-right{color:#9197a3;}
        .ex-testimonial-copy{padding:15px 0px 0px 0px;}   
    </style>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#dropdownsearch").hover(function(){
            $(this).css("background-color","#9197a3");
        });
        var total_record = 0;
        var total_groups = <?php echo $totaldata;?>; 
        $('#results').load("<?php echo base_url(); ?>/index.php/homecontroller/loadData",
         {'group_no':total_record}, function() {total_record++;});
        $(window).scroll(function() {       
            if($(window).scrollTop() + $(window).height() == $(document).height())  
            {           
                if(total_record <= total_groups)
                {
                    $.ajax({
                          type: "POST",
                          url: "<?php echo base_url(); ?>/index.php/homecontroller/loadData",
                          dataType: 'html',
                          success: function(result) {                          
                            $("#results").append(result);                              
                            total_record++;
                        }
                    });     
                }
            }
        });

        $("#search").keyup(function(){
            var searchvalue = $("#search").val();
             $.ajax(
                {
                type: "POST",
                url: "<?php echo base_url(); ?>" + "/index.php/homecontroller/dataSearch",
                dataType: 'html',
                data: {search: searchvalue},
                dataType: 'html',
                success: function(result) {                      
                    $("#dropdownsearch").html(result);                              
                }
            });
        });
    });
    </script>

    <body>
        <body>
            <div id="navbar-wrapper" class="row">
                <header>
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo base_url();?>index.php/home">example.com</a>
                            </div>
                            <div id="navbar-collapse" class="collapse navbar-collapse" align="center">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a id="user-profile" href="" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $image_url;?>" class="img-responsive img-thumbnail img-circle"><?php echo $name;?></</a>
                                        <ul class="dropdown-menu dropdown-block" role="menu">
                                            <li><a href="<?php echo base_url();?>index.php/Profile">Profile</a></li>
                                            <li><a href="<?php echo base_url();?>index.php/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form">
                                    <div class="form-group" style="display:inline;">
                                      <div class="input-group" style="display:table;">
                                        <span class="input-group-addon" style="width:1%;"><span class="glyphicon glyphicon-search"></span></span>
                                        <input type="text" class="form-control" placeholder="Search" id="search" data-toggle="dropdown" autocomplete="off"">
                                        <ul class="dropdown-menu" id="dropdownsearch" style="width:990px;font-size: 25px; text-decoration:none;font-weight: 5px;">
                                        </ul>
                                      </div>
                                    </div>
                                </form>  
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
            <div id="wrapper">
                <div id="sidebar-wrapper">
                    <aside id="sidebar">
                        <ul id="sidemenu" class="sidebar-nav">
                            <li>
                                <a href="<?php echo base_url();?>index.php/home">
                                    <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                                    <span class="sidebar-title">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Profile">
                                    <span class="sidebar-icon"><i class="fa fa-user"></i></span>
                                    <span class="sidebar-title">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Aboutus">
                                    <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                                    <span class="sidebar-title">About us</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/Contactus">
                                    <span class="sidebar-icon"><i class="fa fa-addressbook"></i></span>
                                    <span class="sidebar-title">Contact us</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/logout">
                                    <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                                    <span class="sidebar-title">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </aside>            
                </div>
                <main id="page-content-wrapper" role="main">
                    <div id="body">
                      <ol> <div id="results"></div></ol>
                    </div> 
                </main>
            </div> 
        </body>
          
            
    </body>
</html>