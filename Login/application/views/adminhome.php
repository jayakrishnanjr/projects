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
        nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
        nav.navbar-findcond a { color: #f14444; }
        nav.navbar-findcond ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
        nav.navbar-findcond ul.navbar-nav a:hover,
        nav.navbar-findcond ul.navbar-nav a:visited,
        nav.navbar-findcond ul.navbar-nav a:focus,
        nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
        nav.navbar-findcond ul.navbar-nav a:hover { border-color: #f14444; }
        #row1{
          margin-top: 40px;
        }   
        .custab{
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.8s;
            }
        .custab:hover{
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
            }  
    </style>
    <script type="text/javascript">
          $(document).ready(function(){
              $("#submit").click(function(event){
                event.preventDefault();
                $.ajax({
                      type: "POST",
                      url: "<?php echo base_url(); ?>" + "index.php/admincontroller/viewAllUserDetails",
                      dataType: 'json',
                      success: function(result) {
                         $.each(result.result, function(k, v){
                          if (v.Status == 1)
                           {
                              var status="enable";
                              var statusbutton="btn btn-success";
                               $("#table1").append('<tr><td>'+v.Email+'</td><td>'+v.Password+'</td><td>'+v.Activationcode+'</td><td>'+v.SignupTime+'</td><td><a href="<?php echo base_url(); ?>index.php/admincontroller/disablestatus/'+v.Id+'" class="'+statusbutton+'">'+status+'</a></td>');
                           } 
                          else
                          {
                              var statusbutton="btn btn-danger";
                              var status="disable";
                               $("#table1").append('<tr><td>'+v.Email+'</td><td>'+v.Password+'</td><td>'+v.Activationcode+'</td><td>'+v.SignupTime+'</td><td><a href="<?php echo base_url(); ?>index.php/admincontroller/enablestatus/'+v.Id+'" class="'+statusbutton+'">'+status+'</a></td>');
                          }
                         });
                      },
                      error: function() { 
                          alert("some errors are occured");
                      }
                  });
              });
          }); 
      </script>
    </head>
    <body>
        <nav class="navbar navbar-findcond navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php/adminhome">example.com</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url();?>index.php/adminlogin">logout<span class="sr-only">(current)</span></a></li>
                  </ul>  
                </div>
            </div>
        </nav>
        <div class="row" align="center" id="row1">
          <h1>Admin page</h1>
        </div>
        <div class="row" align="center">
           <input type="submit" class="btn btn-primary" id="submit" value="View all User Details">
        </form>
        </div>
       <div class="container">
           <div class="center custyle">
           <table class="table table-striped custab" id="table1">
           <thead>
               <tr>
                   <th>emailID</th>
                   <th>password</th>
                   <th>activation</th>
                   <th class="text-center">signuptime</th>
                   <th class="text-center">status</th>
               </tr>             
           </thead>
           </table>
           </div>
       </div>
    </body>
</html>



