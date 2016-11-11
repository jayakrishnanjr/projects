<div class="container">
            <!-- Login block -->
            <div class="row login_block form-group">
                <div class="col-md-4 col-md-offset-4" class="">
                    <div class="form-signin">
                        <form method="POST" action="<?php echo base_url();?>index.php/home" id="">
                            <!-- email input box -->
                            <label>email</label>
                            <input type="email" class="form-control" name="email" 
                                placeholder="email"  id="email" value="<?php echo set_value('email');?>" required maxlength="55" data-minlength="7">
                            <br>
                            <!-- Password input box -->
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" 
                                placeholder="Password"  id="password" required maxlength="20" data-minlength="8">
                            <br>
                            <!-- Button -->
                            <input class="btn btn-success btn-block" type="submit" id="submit" value="Login">
                            <br>
                            <br>
                            <a href="<?php echo base_url();?>index.php/signup" class="btn btn-primary" 
                                align="center" id="ahref">Sign up</a>
                        </form>
                    </div>
                </div>
            </div>





            ,
                            title: {
                                validators: {
                                    notEmpty: {
                                        message: 'The title is required and cannot be empty'
                                    },
                                    stringLength: {
                                        max: 100,
                                        message: 'The title must be less than 100 characters long'
                                    }
                                }
                            },
                            content: {
                                validators: {
                                    notEmpty: {
                                        message: 'The content is required and cannot be empty'
                                    },
                                    stringLength: {
                                        max: 500,
                                        message: 'The content must be less than 500 characters long'
                                    }
                                }
                            }
