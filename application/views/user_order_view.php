<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Order Saya</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">

                    <li><a href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li>Order Saya</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" id="customer-orders">
                <div class="box">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Kode Booking</th>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>Bukti Transfer</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                        foreach ($order as $o) 
                        {
                            echo '
                            <tr>
                                <td>'.$o->id_booking.'</td>
                                <td>'.date('d F Y',strtotime($o->tanggal_booking)).'</td>
                                <td>Rp. '.$o->total_booking.'</td>
                                <td>'
                                ?>
                                <?php
                                    if($o->bukti_transfer != null)
                                        echo '<p><a href="'.base_url().'/assets/img/'.$o->bukti_transfer.'">Lihat</a></p>';
                                ?>
                                <?php

                                if ($o->status_booking == "book") 
                                echo '
                                <form action="'.base_url().'account/update_pembayaran/'.$o->id_booking.'" method="post" accept-charset="utf-8" id="bukti_tf_form_'.$o->id_booking.'"  enctype="multipart/form-data">
                                    <input id="bukti_tf_img_'.$o->id_booking.'" type="file" name="pic" accept="image/*">
                                </form>
                                <script>
                                    document.getElementById("bukti_tf_img_'.$o->id_booking.'").onchange = () => {
                                        document.getElementById("bukti_tf_form_'.$o->id_booking.'").submit();
                                    };
                                </script>
                                </td>';

                                if ($o->status_booking == "book") {
                                    echo '<td><span class="label label-info">'.$o->status_booking.'</span></td>
                                    <td>
                                        <a href="'.base_url().'account/edit_booking/'.$o->id_booking.'/'.$o->id_paket.'" class="btn btn-info btn-sm"
                                        ';
                                        ?>
                                        <?php 
                                            if($o->bukti_transfer == null)
                                                echo 'disabled';
                                        ?>
                                        <?php
                                        echo '
                                        >Confirm</a>
                                        <a href="'.base_url().'account/hapus_booking/'.$o->id_booking.'/'.$o->id_paket.'" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>';
                                } else  {
                                    echo '<td><span class="label label-info">'.$o->status_booking.'</span></td>
                                    <td></td>';
                                }
                        }
                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <div class="col-md-3">
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pilihan Customer</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="<?php echo base_url(); ?>account"><i class="fa fa-user"></i> Akun Saya</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>account/lihat_user_order"><i class="fa fa-list"></i> Order Saya</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>