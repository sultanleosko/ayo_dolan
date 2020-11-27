<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1><?php echo $penginapan_detail->nama_penginapan; ?></h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li>Penginapan</li>
                    <li><?php echo $penginapan_detail->nama_penginapan; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <p class="lead"><?php echo $penginapan_detail->intro_penginapan; ?></p>
            </div>
        </div>
        <div class="row portfolio-project">
            <section>
                <div class="col-sm-5">
                    <div class="project">
                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $penginapan_detail->gambar_penginapan ?>" alt="" class="img-responsive">
                    </div>
                    <br>
                </div>

                <div class="row" id="productMain">
                    <div class="col-sm-5">
                        <form>
                            <div class="project-more">
                                <h4>Lokasi</h4>
                                <p><?php echo $penginapan_detail->lokasi; ?></p>
                                <h4>Telepon</h4>
                                <p><?php echo $penginapan_detail->telepon; ?></p>
                                <h4>Fasilitas</h4>
                                <p><?php echo $penginapan_detail->fasilitas; ?></p>
                            </div>
                            <p class="price">Rp. <?php echo $penginapan_detail->harga_penginapan; ?>,-</p>
                            <p class="text-center">
                                <?php 
                                    if($this->session->userdata('login') == TRUE) {
                                        echo '
                                            <a href="'.base_url().'booking" class="btn btn-template-main"><i class="fa fa-ticket"></i> Pesan Sekarang</a>
                                        ';
                                    } else {
                                        echo '
                                            <a href="'.base_url().'login" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Login untuk Pesan</a>
                                        ';
                                    }
                                ?>
                            </p>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <section>
            <div class="row portfolio">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>Penginapan lain</h3>
                    </div>
                </div>

                <?php 
                    foreach ($four_penginapan as $pfour) {
                        echo '
                            <div class="col-sm-6 col-md-3">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="'.base_url().'assets/img/'.$pfour->gambar_penginapan.'" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="#">'.$pfour->nama_penginapan.'</a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="#" class="btn btn-template-transparent-primary">Pesan</a>
                                            <a href="'.base_url().'penginapan/lihat_penginapan/'.$pfour->id_penginapan.'" class="btn btn-template-transparent-primary">Lihat</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
        </section>
    </div>
</div>