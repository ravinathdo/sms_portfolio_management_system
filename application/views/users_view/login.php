<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>
        <?php $this->load->view('basecss'); ?>

    </head>

    <body style="background-color:white">

        <div id="wrapper">

            <!-- Navigation -->
            <div>
                <?php //$this->load->view('main_header');?>
                <div>
                    <!--/Navigation-->

                    <!-- Page Content -->
                    <!--  <div id="page-wrapper"> -->
                    <div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 align = "center" class="page-header">Integrated Securities Portfolio Management System</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>

                            <!-- /.row -->
                            <div class="row">

                                <div class="col-lg-4">

                                </div>


                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Registerd User Login
                                        </div>
                                        <div class="panel-body">


                                            <?php // echo form_open('Users/userLogin/'); ?>
                                            <?php echo form_open('Login_Controller/login/'); ?>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input name="username" type="text" class="form-control" value="" >
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="password" type="password" class="form-control" value="" >
                                            </div>
                                            <div align = "center">
                                                <p>
                                                    <button type="submit" value="Login" name="submit"class="btn btn-primary">Login</button>

                                                    <button type="reset" class="btn btn-primary">Cancel</button>
                                                </p>
                                                <p>

                                                    <a href="#bannerformmodal" data-toggle="modal" data-target="#bannerformmodal">Forget Password</a>

                                                    <!-- Modal -->
                                                      <div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal">
                                                       <div class="modal-dialog">

                                                         <!-- Modal content-->
                                                         <div class="modal-content">
                                                           <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                             <h4 class="modal-title">Forget Password</h4>
                                                           </div>
                                                           <div class="modal-body">

                                                             <p><h4>Please Contact Administrator.</h4></p>

                                                             <div align="center">
                                                             <dl >
                                                                 <dt>Contact Number:</dt>
                                                                 <dd>011 25500000 </dd>

                                                                 <dt>email:</dt>
                                                                 <dd>admin@sms.lk </dd>

                                                             </dl>
                                                           </div>

                                                           </div>
                                                           <div class="modal-footer">
                                                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                           </div>
                                                         </div>

                                                       </div>
                                                     </div>


                                                </p>
                                                <p class="bg-danger"><?php if(isset($msg)){
                                                    echo $msg;
                                                } ?></p>
                                            </div>
                                            <?php echo form_close(); ?>

                                        </div>
                                    </div>


                                    <div class="panel panel-default">

                                        <div class="panel-body">
                                            <div  align="center">
                                                <p>
                                                    Don't have an account? <a href="<?php echo site_url('Registration_Controller/signUp')?>">Sign Up</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4">

                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>
                    </body>

                    </html>
