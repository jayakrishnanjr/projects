<!DOCTYPE html>
<html>
    <head>
        <title>home</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <style>
          /*

          * Based on Cover by https://twitter.com/mdo"  @mdo
          * added cover image and background color to match (green)
          *
          * Globals

          */

          /* Links */
          a,
          a:focus,
          a:hover {
            color: #fff;
          }

          /* Custom default button */
          .btn-default,
          .btn-default:hover,
          .btn-default:focus {
            color: #333;
            text-shadow: none; /* Prevent inheritence from `body` */
            background-color: #fff;
            border: 1px solid #fff;
          }


          /*
           * Base structure
           */

          html,
          body {
          /*css for full size background image*/
            background: url(http://p1.pichost.me/i/66/1910819.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            
            height: 100%;
            background-color: #060;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 3px rgba(0,0,0,.5);
           
          }

          /* Extra markup and styles for table-esque vertical and horizontal centering */
          .site-wrapper {
            display: table;
            width: 100%;
            height: 100%; /* For at least Firefox */
            min-height: 100%;
            -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
                    box-shadow: inset 0 0 100px rgba(0,0,0,.5);
          }
          .site-wrapper-inner {
            display: table-cell;
            vertical-align: top;
          }
          .cover-container {
            margin-right: auto;
            margin-left: auto;
          }

          /* Padding for spacing */
          .inner {
            padding: 30px;
          }


          /*
           * Header
           */
          .masthead-brand {
            margin-top: 10px;
            margin-bottom: 10px;
          }

          .masthead-nav > li {
            display: inline-block;
          }
          .masthead-nav > li + li {
            margin-left: 20px;
          }
          .masthead-nav > li > a {
            padding-right: 0;
            padding-left: 0;
            font-size: 16px;
            font-weight: bold;
            color: #fff; /* IE8 proofing */
            color: rgba(255,255,255,.95);
            border-bottom: 2px solid transparent;
          }
          .masthead-nav > li > a:hover,
          .masthead-nav > li > a:focus {
            background-color: transparent;
            border-bottom-color: #a9a9a9;
            border-bottom-color: rgba(255,255,255,.25);
          }
          .masthead-nav > .active > a,
          .masthead-nav > .active > a:hover,
          .masthead-nav > .active > a:focus {
            color: #fff;
            border-bottom-color: #fff;
          }

          @media (min-width: 768px) {
            .masthead-brand {
              float: left;
            }
            .masthead-nav {
              float: right;
            }
          }


          /*
           * Cover
           */

          .cover {
            padding: 0 20px;
          }
          .cover .btn-lg {
            padding: 10px 20px;
            font-weight: bold;
          }


          /*
           * Footer
           */

          .mastfoot {
            color: #999; /* IE8 proofing */
            color: rgba(255,255,255,.5);
          }


          /*
           * Affix and center
           */

          @media (min-width: 768px) {
            /* Pull out the header and footer */
            .masthead {
              position: fixed;
              top: 0;
            }
            .mastfoot {
              position: fixed;
              bottom: 0;
            }
            /* Start the vertical centering */
            .site-wrapper-inner {
              vertical-align: middle;
            }
            /* Handle the widths */
            .masthead,
            .mastfoot,
            .cover-container {
              width: 100%; /* Must be percentage or pixels for horizontal alignment */
            }
          }

          @media (min-width: 992px) {
            .masthead,
            .mastfoot,
            .cover-container {
              width: 700px;
            }
          }
    </style>
    </head>
    <body>
        <div class="site-wrapper">
          <div class="site-wrapper-inner">
            <div class="cover-container">
              <div class="masthead clearfix">
                <div class="inner">
                  <h3 class="masthead-brand">Cover</h3>

                  <ul class="nav masthead-nav">

                    <li>
                      <a href="<?php echo base_url();?>index.php/logout">logout</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="inner cover">
                <h1 class="cover-heading">Home</h1>

                <p class="lead">Cover is a one-page template for building simple and
                beautiful home pages. Download, edit the text, and add your own
                fullscreen background color and photo to make it your own.
                    
                <small>    <br> <a href="http://bootsnipp.com/iframe/g6GWQ" target=
                      "_blank">Best viewed on full screen</a></small>
                    
                </p>

                <p class="lead"><a class="btn btn-lg btn-info" href="#">Learn
                more</a></p>
              </div>

              <div class="mastfoot">
                <div class="inner">
                  <!-- Validation -->

                  <p><a href=
                  "http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2Fg6GWQ"
                  target="_blank"><small>HTML</small><sup>5</sup></a></p>
                  
                  
                  <p><a href=
                  "https://github.com/twbs/bootlint"
                  target="_blank"><small>Checked with Bootlint</small></a></p>          
              
                  

                  <p>© 2014 Your Name ~ <a href=
                  "http://getbootstrap.com/">Bootstrap</a></p>
                </div>
              </div>
            </div>
        </div>
        </div>
    </body>
</html>
