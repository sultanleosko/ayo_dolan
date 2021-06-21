<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1><?php echo $paket_detail->nama_paket; ?></h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li>Paket</li>
                    <li><?php echo $paket_detail->nama_paket; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<p class="lead"><?php echo $paket_detail->intro_destinasi; ?></p>-->
            </div>
        </div>
        <div class="row portfolio-project">
            <section>
                <div class="col-sm-8">
                    <div class="project">
                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $paket_detail->gambar_paket ?>" alt="" class="img-responsive">
                    </div>
                    <br>
                </div>

                <div class="row" id="productMain">
                    <div class="col-sm-4">
                        <div class="project-more">
                            <h4>Lokasi</h4>
                            <p><?php echo $paket_detail->lokasi ?></p>
                            <h4>Kuota</h4>
                            <p><?php echo $paket_detail->kuota ?> Orang</p>                 
                        </div>
                        <p class="price">Rp. <?php echo $paket_detail->harga_tiket ?>,-</p>
                        <p class="text-center">
                            <?php
                                if($this->session->userdata('login') == TRUE) {
                                    if($this->session->userdata('tipe_user') != '1')
                                    echo '
                                        <a href="'.base_url().'booking/jumlah_tiket/'.$paket_detail->id_paket.'" class="btn btn-template-main"><i class="fa fa-ticket"></i> Pesan Sekarang</a>
                                    ';
                                } else {
                                    echo '
                                        <a href="'.base_url().'login" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Login untuk Pesan</a>
                                    ';
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </section>


            <section>
                <div class="col-sm-12">
                    <div class="heading">
                        <h3>Deskripsi</h3>
                    </div>

                    <p><?php echo $paket_detail->deskripsi ?></p> 
                </div>
            </section>
        </div>

        <section>
            <div class="row portfolio">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>Destinasi lain</h3>
                    </div>
                </div>

                <?php 
                    foreach ($four_paket as $pfour) {
                        echo '
                            <div class="col-sm-6 col-md-3">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="'.base_url().'assets/img/'.$pfour->gambar_paket.'" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="#">'.$pfour->nama_paket.'</a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="#" class="btn btn-template-transparent-primary">Pesan</a>
                                            <a href="'.base_url().'paket/lihat_paket/'.$pfour->id_paket.'" class="btn btn-template-transparent-primary">Lihat</a>
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