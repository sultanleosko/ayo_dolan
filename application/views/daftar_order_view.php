<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Pemesanan - Daftar Order</h1>
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
                    <form method="post" action="<?php echo base_url(); ?>booking/pembayaran/<?php echo $paket_detail->id_paket ?>">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="<?php echo base_url(); ?>booking/jumlah_tiket/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-ticket"></i><br>Jumlah Tiket</a>
                            </li>
                            <li class="disabled"><a href="<?php echo base_url(); ?>booking/konfirmasi_data/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-check"></i><br>Konfirmasi Data</a>
                            </li>
                            <li class="active"><a href="<?php echo base_url(); ?>booking/daftar_order/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-eye"></i><br>Daftar Order</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Pembayaran</a>
                            </li>
                        </ul>

                        <div class="content">
                        <div class="hidden">
                            <input type="text" class="form-control" id="alamat" name="jumlah_tiket" value="<?php echo $jml;?>">
                            <input type="text" class="form-control" id="alamat" name="tanggal_berangkat" value="<?php echo $tgl;?>" >
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Nama Produk</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah Pesan</th>
                                            <th>Harga Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                echo '
                                                    <tr>
                                                        <td>
                                                            <a href="#">
                                                                <img src="'.base_url().'/assets/img/'.$paket_detail->gambar_paket.'" alt="White Blouse Armani">
                                                            </a>
                                                        </td>
                                                        <td><a href="#">'.$paket_detail->nama_paket.'</a></td>
                                                        <td>'. date('d F Y',strtotime($tgl)) .'</td>
                                                        <td>'. $jml .' tiket</td>
                                                        <td>Rp. '.$paket_detail->harga_tiket.',-</td>
                                                        <td>Rp. '.($paket_detail->harga_tiket*$jml).',-</td>
                                                    </tr>
                                                ';
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th>
                                                <?php 
                                                    $jumlah = count($paket_order);
                                                    $total = 0;
                                                    for($i=0; $i<$jumlah; $i++) {
                                                        $total = $total + $paket_order[$i]['total_booking'];
                                                    } 
                                                    echo "Rp. ".($paket_detail->harga_tiket*$jml)." ,-"
                                                ?>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>booking/jumlah_tiket/<?php echo $paket_detail->id_paket ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali ke Jumlah Tiket</a>
                            </div>
                            <div class="pull-right">
                                <input type="submit" name="submit_booking" value="Lanjutkan ke Pembayaran >" class="btn btn-template-main">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>