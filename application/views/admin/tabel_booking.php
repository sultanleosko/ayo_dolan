<div class="content-wrapper">
    <section class="content-header">
        <h1>Tabel Booking</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tabel</a></li>
            <li class="active">Tabel Booking</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                       <!-- <div class="box-tools">
                            <a href="<?php echo base_url(); ?>admin/tambah_booking_view" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        </div>-->
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th style="width: 225px">Username</th>
                                <th>Status Booking</th>
                                <th>Total Booking</th>
                                <th>Tanggal Booking</th>
                                <th>Bukti Transfer</th>
                                <th style="width: 125px">Aksi</th>
                            </tr>

                            <?php 
                                foreach ($tabel_booking as $tb) {
                                    echo '
                                        <tr>
                                            <td>'.$tb->id_booking.'</td>
                                            <td>'.$tb->username.'</td>
                                            <td>'.$tb->status_booking.'</td>
                                            <td>'.$tb->total_booking.'</td>
                                            <td>'.$tb->tanggal_booking.'</td>  
                                            ';
                                            ?>
                                            <?php
                                                if($tb->bukti_transfer != null)
                                                    echo '<td><p><a href="'.base_url().'/assets/img/'.$tb->bukti_transfer.'">Lihat</a></p></td>';
                                                else
                                                    echo '<td>Belum ada bukti transfer</td>'
                                            ?>
                                            <?php
                                            if ($tb->status_booking == "pending") {
                                                echo '<td>
                                                            <a href="'.base_url().'admin/hapus_booking/'.$tb->id_booking.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> </a>
                                                            <a href="'.base_url().'admin/update/'.$tb->id_booking.'" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-check"></i> </a>
                                                        </td>
                                                    </tr>';
                                            } else  {
                                                echo '<td>
                                                            <a href="'.base_url().'admin/hapus_booking/'.$tb->id_booking.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> </a>
                                                        </td>
                                                    </tr>';
                                            }
                                } 
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>