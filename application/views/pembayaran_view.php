<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Pemesanan - Pembayaran</h1>
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
                    <form method="post" action="">
                        <ul class="nav nav-pills nav-justified">
                            <li class="disabled"><a href="<?php echo base_url(); ?>booking/jumlah_tiket/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-ticket"></i><br>Jumlah Tiket</a>
                            </li>
                            <li class="disabled"><a href="<?php echo base_url(); ?>booking/konfirmasi_data/<?php echo $paket_detail->id_paket ?>"><i class="fa fa-check"></i><br>Konfirmasi Data</a>
                            </li>
                            <li class="disabled"><a href="<?php echo base_url(); ?>booking/daftar_order"><i class="fa fa-eye" c></i><br>Daftar Order</a>
                            </li>
                            <li class="active"><a href="#"><i class="fa fa-money"></i><br>Pembayaran</a>
                            </li>
                        </ul>

                        <div class="content">
                            <div class="table-responsive">
                                <div class="container-fluid">

                                    <?php 
                                                    $jumlah = count($paket_order);
                                                    $total = 0;
                                                    for($i=0; $i<$jumlah; $i++) {
                                                        $total = $total + $paket_order[$i]['total_booking'];
                                                    } 
                                                    echo '
                                                    <center>Silahkan transfer total pembayaran Anda sejumlah <b>Rp. '.$ttl.' 
                                                    ,-</b> ke rekening tujuan <b>BCA : 387901018954534</b> A/N <b>Sultan Leosko Akbar Atjil</b></font></center>
                                                    ';
                                                ?>

                                </div>                            
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali ke Home</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url(); ?>account/lihat_user_order/" class="btn btn-template-main">Done</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3><center>Total Order</center></h3>
                    </div>
                    <p class="text-muted"><center>Anda melakukan pemesanan di Ayo Dolan. Segera lakukan pembayaran dan konfirmasi pembayaran.</center></p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <?php 
                                    $jumlah = count($paket_order);
                                            $total = 0;
                                            for($i=0; $i<$jumlah; $i++) {
                                               $total = $total + $paket_order[$i]['total_booking'];
                                            } 
                                    echo '
                                <tr class="total">
                                    <td>Total</td>
                                    <th>Rp. '.$ttl.' ,-</th>
                                </tr>
                            ';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>