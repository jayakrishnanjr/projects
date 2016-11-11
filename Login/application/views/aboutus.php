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
   
  </style>
</head>
<body>

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