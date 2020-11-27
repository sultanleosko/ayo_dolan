<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1><?php echo $destinasi_detail->nama_destinasi; ?></h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li>Destinasi</li>
                    <li><?php echo $destinasi_detail->nama_destinasi; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">
        <div class="row portfolio-project">
            <section>
                <div class="col-sm-8">
                    <div class="project">
                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $destinasi_detail->gambar_destinasi ?>" alt="" class="img-responsive">
                    </div>
                    <br>
                </div>

                <div class="col-sm-4">

                    <div class="project-more">
                        <h4>Nama</h4>
                        <p><?php echo $destinasi_detail->nama_destinasi; ?></p>
                    </div>
                    <div class="project-more">
                        <h4>Lokasi</h4>
                        <p><?php echo $destinasi_detail->lokasi; ?></p>
                    </div>
                    <div class="project-more">
                        <h4>Deskripsi</h4>
                        <p><?php echo $destinasi_detail->intro_destinasi; ?></p>
                    </div>
                </div>
            </section>
        </div>

        <section>
            <div class="row portfolio">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>Destinasi Lain</h3>
                    </div>
                </div>

                <?php 
                    foreach ($four_destinasi as $dfour) {
                        echo '
                            <div class="col-sm-6 col-md-3">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="'.base_url().'assets/img/'.$dfour->gambar_destinasi.'" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="#">'.$dfour->nama_destinasi.'</a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="'.base_url().'destinasi/lihat/'.$dfour->id_destinasi.'" class="btn btn-template-transparent-primary">Lihat</a>
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