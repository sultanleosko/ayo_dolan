<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Masuk</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li>Masuk</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="col-md-3">
                </div>

                <div class="col-md-6">
                    <center>
                        <h2 class="text-uppercase">Masuk</h2>
                        <p class="lead">Silahkan masuk traveller</p>
                    </center>
                    
                    <hr>

                    <form action="<?php echo base_url(); ?>login/do_login" method="post">
                        <?php
                            if(!empty($this->session->flashdata('notif_login'))){
                                echo $this->session->flashdata('notif_login');
                            }
                        ?>
                        <div class="form-group">
                            <label for="username-login">Username</label>
                            <input type="text" class="form-control" id="username-login" name="username_login">
                        </div>
                        <div class="form-group">
                            <label for="password-login">Password</label>
                            <input type="password" class="form-control" id="password-login" name="password_login">
                        </div>
                        <div class="text-center">
                            <input type="submit" name="submit_login" class="btn btn-template-main" value="Login">
                        <br>
                        </div>
                        <div class="form-group">
                            <br><center>Belum punya akun?</center>
                        </div>
                        <div class="text-center">
                        <a href="<?php echo base_url();?>register"><i class="btn btn-template-main">Daftar </i></a>
                        </div>
                    </form>
                </div>
                
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div><br>
</div>