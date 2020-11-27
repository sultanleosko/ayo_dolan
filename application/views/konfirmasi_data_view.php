<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Pemesanan - Konfirmasi  </h1>
            </div>
            <div class="col-md-5">
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 clearfix" id="checkout">
                <div class="box">
                    <form method="post" action="<?php echo base_url(); ?>booking/daftar_order/<?php echo $paket_detail->id_paket; ?>">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="<?php echo base_url(); ?>booking/jumlah_tiket/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-ticket"></i><br>Jumlah Tiket</a>
                            </li>
                            <li class="active"><a href="<?php echo base_url(); ?>booking/konfirmasi_data/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-check"></i><br>Konfirmasi Data</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Daftar Order</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Pembayaran</a>
                            </li>
                        </ul>

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Username</label>
                                        <input type="text" class="form-control" id="disabledInput" name="username_update" value="<?php if (!empty($profil_user->username)) { echo $profil_user->username;} ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="disabledInput" name="namalengkap_update" value="<?php if (!empty($profil_user->nama_lengkap)) { echo $profil_user->nama_lengkap;} ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email_account">Email</label>
                                        <input type="text" class="form-control" id="email" name="email_update" value="<?php if (!empty($profil_user->email)) { echo $profil_user->email;} ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat_update" value="<?php if (!empty($profil_user->alamat)) { echo $profil_user->alamat;} ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden">
                            <input type="text" class="form-control" id="alamat" name="jumlah_tiket" value="<?php echo $jml;?>">
                            <input type="text" class="form-control" id="alamat" name="tanggal_berangkat" value="<?php echo $tgl;?>" >
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>booking/jumlah_tiket/<?php echo $paket_detail->id_paket ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali ke jumlah tiket</a>
                            </div>
                            <div class="pull-right">
                                <input type="submit" name="submit_konvermasi" value="Lanjutkan ke Daftar Order" class="btn btn-default">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>