<!DOCTYPE html>
<html>
<head>
  <title>About us</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body {
      background: #F1F3FA;
    }
    nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
    nav.navbar-findcond a { color: #f14444; }
    nav.navbar-findcond ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
    nav.navbar-findcond ul.navbar-nav a:hover,
    nav.navbar-findcond ul.navbar-nav a:visited,
    nav.navbar-findcond ul.navbar-nav a:focus,
    nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
    nav.navbar-findcond ul.navbar-nav a:hover { border-color: #f14444; }
    #row1{
      margin-top: 200px;
    }
    .box {
      background:#fff;
      transition:all 0.2s ease;
      border:2px dashed #dadada;
      margin-top: 10px;
      box-sizing: border-box;
      border-radius: 5px;
      background-clip: padding-box;
      padding:0 20px 20px 20px;
      min-height:340px;
    }

    .box:hover {
      border:2px solid #525C7A;
    }

    .box span.box-title {
        color: #fff;
        font-size: 24px;
        font-weight: 300;
        text-transform: uppercase;
    }

    .box .box-content {
      padding: 16px;
      border-radius: 0 0 2px 2px;
      background-clip: padding-box;
      box-sizing: border-box;
    }
    .box .box-content p {
      color:#515c66;
      text-transform:none;
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
   
  </style>
  <script>
    
  </script>
</head>
<body>
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
                      <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/Login/assets/img/image2.jpg" class="img-responsive img-thumbnail img-circle"> Jayakrishnan J R</a>
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
                      <input class="form-control" name="search" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">
                    </div>
                  </div>
              </form>
          </div>
      </div>
  </nav>
  <div class="row1">
  </div>
  <div class="container">
  <div class="row">
    <h2 class="text-center">Services Blocks</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box">
                        <div class="box-content">
                            <h1 class="tag-title">Heading</h1>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
                            <br />
                            <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
  </div>
</div>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2),
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
</body>
</html> 