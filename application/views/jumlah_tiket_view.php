<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Pemesanan - Jumlah Tiket</h1>
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
                    <form method="post" action="<?php echo base_url(); ?>booking/konfirmasi_data/<?php echo $paket_detail->id_paket ?>">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="<?php echo base_url(); ?>booking/jumlah_tiket/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-ticket"></i><br>Jumlah Tiket</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-check"></i><br>Konfirmasi Data</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Daftar Order</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Pembayaran</a>
                            </li>
                        </ul>


                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                        if(!empty($this->session->flashdata('notif_booking'))){
                                            echo $this->session->flashdata('notif_booking');
                                        }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Nama Produk</label>
                                    <h5><?php echo $paket_detail->nama_paket ?></h5>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <label for="lastname">Tanggal Berangkat</label>
                                    <input type="date" class="form-control" name="tanggal_berangkat" value="">
                                </div>                            
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="state">Jumlah Tiket</label>
                                        <select class="form-control" id="jumlah_tiket" name="jumlah_tiket">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>home" class="btn btn-default"><i class="fa fa-times"></i>Batal Order</a>
                            </div>
                            <div class="pull-right">
                                <input type="submit" class="btn btn-template-main" name="submit_booking" value="Lanjutkan ke Konfirmasi Data >">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>