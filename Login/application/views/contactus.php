<!DOCTYPE html>
<html>
     <head>
         <title>ContactUs</title>
             <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
             <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <style>
          #a2,#a5,#a3,#a4{
            color: grey;
          }
          #div7 {
            padding-top: 40px;
            padding-left: 60px;
          }
          

          /*ends the codes of header*/

         .jumbotron {
          background: #358CCE;
          color: #FFF;
          border-radius: 0px;
          }
          .jumbotron-sm { padding-top: 34px;
          padding-bottom: 24px; }
          .jumbotron small {
          color: #FFF;
          }
          .h1 small {
          font-size: 24px;
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
                      <input class="form-control" name="search" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">
                    </div>
                  </div>
              </form>
          </div>
      </div>
  </nav>
         <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row" id="r1">
            <div class="col-sm-12 col-lg-12">
                <h1 id="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                             <input type="text" class="form-control" id="subject" placeholder="subject" required="required" />    
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>notes</strong><br>
                trivandrum<br>
                <abbr title="Phone">
                    Ph:</abbr>
                (91)949513032
            </address>
            <address>
                <strong>JAYAKRISHNAN J R</strong><br>
                <a href="mailto:#">jrjayakrishnan6@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
</body>
</html>