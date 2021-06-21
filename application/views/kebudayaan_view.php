<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1><?php echo $kebudayaan_detail->name; ?></h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li>Destinasi</li>
                    <li><?php echo $kebudayaan_detail->name; ?></li>
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
                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $kebudayaan_detail->thumbnail ?>" alt="" class="img-responsive">
                    </div>
                    <br>
                </div>

                <div class="col-sm-4">
                    <div class="project-more">
                        <h4>Deskripsi</h4>
                        <p><?php echo $kebudayaan_detail->description; ?></p>
                    </div>
                </div>
            </section>
        </div>

        <section>
            <div class="row portfolio">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>Kebudayaan Lain</h3>
                    </div>
                </div>

                <?php 
                    foreach ($four_kebudayaan as $kfour) {
                        echo '
                            <div class="col-sm-6 col-md-3">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="'.base_url().'assets/img/'.$kfour->thumbnail.'" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="#">'.$kfour->name.'</a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="'.base_url().'kebudayaan/lihat/'.$kfour->id.'" class="btn btn-template-transparent-primary">Lihat</a>
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