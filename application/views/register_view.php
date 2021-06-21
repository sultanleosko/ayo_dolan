<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Daftar</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li>Daftar</li>
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
                        <h2 class="text-uppercase">Akun baru</h2>
                        <p class="lead">Belum terdaftar menjadi traveller?</p>
                        <?php
                            if(!empty($this->session->flashdata('notif_login'))){
                                echo $this->session->flashdata('notif_login');
                            }
                        ?>
                    </center>
                    
                    <hr>

                    <form action="<?php echo base_url(); ?>register/do_register" method="post">
                        <div class="col-sm-12">
                            <?php
                                if(!empty($this->session->flashdata('notif_reg'))){
                                    echo $this->session->flashdata('notif_reg');
                                }
                            ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name-login">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name-register" name="namalengkap_reg" required="required"> 
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="username-login">Username</label>
                                <input type="text" class="form-control" id="username-register" name="username_reg" required="required">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password-login">Password</label>
                                <input type="password" class="form-control" id="password-register" name="password_reg" required="required">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password-login">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="repassword-register" name="repassword_reg" required="required">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="password-login">Alamat</label>
                                <input type="text" class="form-control" id="alamat-register" name="alamat_reg" required="required">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="password-login">Email</label>
                                <input type="email" class="form-control" id="email-register" name="email_reg" required="required">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <input type="submit" name="submit_reg" class="btn btn-template-main" value="Daftar">
                        </div>
                    </form>
                </div>
                
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div><br>
</div>