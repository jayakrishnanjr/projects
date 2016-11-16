<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- bootstarp validator css -->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- bootstrap validator dn -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>
        
        <style>
            #contactForm{
                margin-top: 100px;
            }
            body {
              background-image: url('/Login/assets/img/image2.jpg');
              background-size: cover;
              background-repeat: no-repeat;
              font-family: Arial, sans-serif;
              font-weight: bold;
              font-size: 14px;
            }
            nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
            nav.navbar-findcond a { color: #f14444; }f; } 
            a {
              -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              display: block;
              margin: 20px auto;
              max-width: 180px;
              text-decoration: none;
              border-radius: 4px;
              padding: 20px 30px;
            }
            input.button2 {
              -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
              display: block;
              margin: 20px auto;
              max-width: 180px;
              text-decoration: none;
              border-radius: 4px;
              padding: 10px 20px;
            }
            #row5{
                margin-top: 400px;
            }

            a.button {
              color: rgba(30, 22, 54, 0.6);
              box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;
            }

            a.button:hover {
              color: rgba(255, 255, 255, 0.85);
              box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
            }

            input.button2 {
              color: rgba(30, 22, 54, 0.6);
              box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;
            }

            input.button2:hover {
              color: rgba(255, 255, 255, 0.85);
              box-shadow: rgba(30, 22, 54, 0.7) 0 80px 0px 2px inset;
            }   
            
            nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
            nav.navbar-findcond a { color: #f14444; }f; }    
        </style>
    </head>
    <body>
        <nav class="navbar navbar-findcond navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php/login">example.com</a>
                </div>
            </div>
        </nav>
        <div class="col-md-4 col-md-offset-4" id="contactform" align="center">
            <form id="contactForm" method="post" action="<?php echo base_url();?>index.php/signup">
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <div>
                        <input type="text" class="form-control" name="name" value="<?php if(!empty($name)){ echo $name; } ?>" placeholder="Name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <div>
                        <input type="email" class="form-control" name="email" value="<?php if(!empty($email)){ echo $email; } ?>" placeholder="Email Address" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">confirm Password</label>
                    <div>
                        <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <input type="submit" class="btn button2 btn-success" value="Signup">    
                    </div>
                </div>
            </form> 
            <div align="center">
                <?php echo validation_errors(); ?>
                <?php
                echo $this->session->flashdata('errors'); 
                ?> 
            </div>
        </div> 
        <div class="row" align="center" style="color:red"> 
        </div>  
        <hr>
        <div class="row" align="center">
            <a href="<?php echo base_url();?>index.php/login" class="btn button" 
            align="center" id="ahref">Already registered? Login</a>
        </div>
        <hr>
    </body>
    <script type="text/javascript">
            $(document).ready(function() {
                $('#contactForm').bootstrapValidator({
                    containers: '#messages',
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                      name: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required and cannot be empty'
                                },
                                stringLength: {
                                    max: 25,
                                    min:5,
                                    message: 'name must be 5 to 25 characters long'
                                }

                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required and cannot be empty'
                                },
                                emailAddress: {
                                    message: 'The email address is not valid'
                                },
                                stringLength: {
                                    max: 50,
                                    min:10,
                                    message: 'Email must be 10 to 50 characters long'
                                }

                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'The Password is required and cannot be empty'
                                },
                                stringLength: {
                                    max: 15,
                                    min:5,
                                    message: 'Password must be 5 to 15 characters long'
                                },
                                identical: {
                                   field: 'confirmpassword',
                                   message: 'The password and its confirm are not the same'
                                }
                            }
                        },
                        confirmpassword: {
                            validators: {
                                notEmpty: {
                                    message: 'Password confirmation is required and cannot be empty'
                                },
                                stringLength: {
                                    max: 15,
                                    min:5,
                                    message: 'Confirm password must be 5 to 15 characters long'
                                },
                                identical: {
                                    field: 'password',
                                    message: 'The password and its confirm are not the same'
                                }
                            }
                        }
                    }
                });
            });
    </script>
</html>