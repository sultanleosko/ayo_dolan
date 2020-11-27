<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Akun Saya</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li>Akun Saya</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="content" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-9 clearfix" id="customer-account">
                
                <!-- garis -->
                <hr> 

                <div class="heading">
                    <h3 class="text-uppercase">Ganti password</h3>
                </div>

                <?php
                    if(!empty($this->session->flashdata('notif_pass'))){
                        echo $this->session->flashdata('notif_pass');
                    }
                ?>
                <form action="<?php echo base_url(); ?>account/update_password" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password_1">Password baru</label>
                                <input type="password" class="form-control" id="new_password" name="password_update">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password_2">Konfirmasi password baru</label>
                                <input type="password" class="form-control" id="new_repassword" name="repassword_update">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Simpan Password Baru</button>
                    </div>
                </form>
            
                <!-- garis -->
                <hr>

                <div class="heading">
                    <h3 class="text-uppercase">Detail Personal</h3>
                </div>

                <?php
                    if(!empty($this->session->flashdata('notif_detail'))){
                        echo $this->session->flashdata('notif_detail');
                    }
                ?>
                <form action="<?php echo base_url(); ?>account/update_detail_personal" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">Username</label>
                                <input type="text" class="form-control" id="username" name="username_update" value="<?php if (!empty($profil_user->username)) { echo $profil_user->username;} ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="namalengkap_update" value="<?php if (!empty($profil_user->nama_lengkap)) { echo $profil_user->nama_lengkap;} ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="street">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat_update" value="<?php if (!empty($profil_user->alamat)) { echo $profil_user->alamat;} ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email_account">Email</label>
                                <input type="text" class="form-control" id="email" name="email_update" value="<?php if (!empty($profil_user->email)) { echo $profil_user->email;} ?>">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Simpan Perubahan</button>
                        </div>
                    </div>
                </form>

                <!-- garis -->
                <hr>
            
            </div>

            <div class="col-md-3">
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pilihan Customer</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>account"><i class="fa fa-user"></i> Akun Saya</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>account/lihat_user_order"><i class="fa fa-list"></i> Order Saya</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out"></i> Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>