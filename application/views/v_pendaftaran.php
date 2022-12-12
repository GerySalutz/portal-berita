<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SignUp Portal Berita</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="<?php echo base_url().'login/css/style.css'?>" />
    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                    	
                    	 <p><?php echo $this->session->flashdata('msg');?></p>
                        <div class="card border-none">
                            <div class="card-body">
                            	
                                <div class="mt-2 text-center">
                                    <h2>Create Your Account</h2>
                                </div>
                                <p class="mt-4 text-white lead text-center">
                                    Sign up to get started with Authority
                                </p>
                                <div class="mt-4">

                                    <form method="post" action="<?php echo base_url().'pendaftaran/simpan_mhs'?>">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="nim" value="" placeholder="Enter Nim" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama" value="" placeholder="Enter Nama" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="" placeholder="Enter E-Mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" value="" placeholder="Enter password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirm-password" value="" placeholder="Confirm password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                
                                <p class="text-center">
                                    Already have an account? <a href="<?php echo base_url().'user/user'?>">Login Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 mt-5 footer">
                        <p class="text-white small text-center">
                             &copy; Portal Berita BSI
                           
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
