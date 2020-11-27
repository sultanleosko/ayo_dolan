<div class="content-wrapper">
    <section class="content-header">
        <h1>Home Admin</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?php 
                                $jumlah_booking = count($tabel_booking);
                                echo "".$jumlah_booking.""
                            ?>    
                        </h3>
                        <p>Booking</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>admin/tabel_booking_view" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            <?php 
                                $jumlah_user = count($tabel_user);
                                echo "".$jumlah_user.""
                            ?>
                        </h3>
                        <p>User Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?php echo base_url(); ?>admin/tabel_user_view" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>