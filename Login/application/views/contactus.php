<!DOCTYPE html>
<html>
     <head>
         <title>ContactUs</title>
             <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
             <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <style>
          nav.navbar-notes { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
          nav.navbar-notes a { color: #f14444; }
          nav.navbar-notes ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
          nav.navbar-notes ul.navbar-nav a:hover,
          nav.navbar-notes ul.navbar-nav a:visited,
          nav.navbar-notes ul.navbar-nav a:focus,
          nav.navbar-notes ul.navbar-nav a:active { background: #fff; }
          nav.navbar-notes ul.navbar-nav a:hover { border-color: #f14444; }
          nav.navbar-notes li.divider { background: #ccc; }
          nav.navbar-notes button.navbar-toggle { background: #f14444; border-radius: 2px; }
          nav.navbar-notes button.navbar-toggle:hover { background: #999; }
          nav.navbar-notes button.navbar-toggle > span.icon-bar { background: #fff; }
          nav.navbar-notes ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
          nav.navbar-notes ul.dropdown-menu > li > a { color: #444; }
          nav.navbar-notes ul.dropdown-menu > li > a:hover { background: #f14444; color: #fff; }
          nav.navbar-notes span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
          nav.navbar-notes span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }
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

         </style>    
     </head>
  <body>
<nav class="navbar navbar-notes navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">notes</a>
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
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
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