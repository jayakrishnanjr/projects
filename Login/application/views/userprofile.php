<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>

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
    /* Profile container */
    .profile {
      margin: 80px 0;
    }

    /* Profile sidebar */
    .profile-sidebar {
      padding: 20px 0 10px 0;
      background: #fff;
    }

    .profile-userpic img {
      float: none;
      margin: 0 auto;
      width: 100px;
      height: 100px;
      -webkit-border-radius: 50% !important;
      -moz-border-radius: 50% !important;
      border-radius: 50% !important;
    }

    .profile-usertitle {
      text-align: center;
      margin-top: 20px;
    }

    .profile-usertitle-name {
      color: #5a7391;
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 7px;
    }

    .profile-usertitle-job {
      text-transform: uppercase;
      color: #5b9bd1;
      font-size: 12px;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .profile-userbuttons {
      text-align: center;
      margin-top: 10px;
    }

    .profile-userbuttons .btn {
      text-transform: uppercase;
      font-size: 11px;
      font-weight: 600;
      padding: 6px 15px;
      margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
      margin-right: 0px;
    }
        
    .profile-usermenu {
      margin-top: 30px;
    }

    .profile-usermenu ul li {
      border-bottom: 1px solid #f0f4f7;
    }

    .profile-usermenu ul li:last-child {
      border-bottom: none;
    }

    .profile-usermenu ul li a {
      color: #93a3b5;
      font-size: 14px;
      font-weight: 400;
    }

    .profile-usermenu ul li a i {
      margin-right: 8px;
      font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
      background-color: #fafcfd;
      color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
      border-bottom: none;
    }

    .profile-usermenu ul li.active a {
      color: #5b9bd1;
      background-color: #f6f9fb;
      border-left: 2px solid #5b9bd1;
      margin-left: -2px;
    }

    /* Profile Content */
    .profile-content {
      padding: 20px;
      background: #fff;
      min-height: 460px;
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
  </style>
</head>
<body>
  
  <div class="row1">
    
  </div>
  <div class="container">
      <div class="row profile">
      <div class="col-md-3">
        <div class="profile-sidebar">
          <!-- SIDEBAR USERPIC -->
          <div class="profile-userpic">
            <img src="/Login/assets/img/image2.jpg" class="img-responsive" alt="profile">
          </div>
          <!-- END SIDEBAR USERPIC -->
          <!-- SIDEBAR USER TITLE -->
          <div class="profile-usertitle">
            <div class="profile-usertitle-name">
              Marcus Doe
            </div>
            <div class="profile-usertitle-job">
              Developer
            </div>
          </div>
          <!-- END SIDEBAR USER TITLE -->
          <!-- SIDEBAR BUTTONS -->
          <div class="profile-userbuttons">
            <button type="button" class="btn btn-success btn-sm">Follow</button>
            <button type="button" class="btn btn-danger btn-sm">Message</button>
          </div>
          <!-- END SIDEBAR BUTTONS -->
          <!-- SIDEBAR MENU -->
          <div class="profile-usermenu">
            <ul class="nav">
              <li class="active">
                <a href="#">
                <i class="glyphicon glyphicon-home"></i>
                Overview </a>
              </li>
              <li>
                <a href="#">
                <i class="glyphicon glyphicon-user"></i>
                Account Settings </a>
              </li>
              <li>
                <a href="#">
                <i class="glyphicon glyphicon-ok"></i>
                Tasks </a>
              </li>
              <li>
                <a href="#">
                <i class="glyphicon glyphicon-flag"></i>
                Help </a>
              </li>
            </ul>
          </div>
          <!-- END MENU -->
        </div>
      </div>
      <div class="col-md-9">
              <div class="profile-content">
                  <h1>profile details</h1>
              </div>
      </div>
    </div>
    </div>
    <br>
  <br>

</body>
</html> 
  