<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
            </div>                
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li>Semua Destinasi</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Semua Destinasi</h2>
                    </div>
                </div>
            </div>


            <div class="row portfolio no-space">
                <?php
                    foreach ($all_destinasi as $dall) {
                        echo '
                            <div class="col-sm-6 col-md-3">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="'.base_url().'/assets/img/'.$dall->gambar_destinasi.'" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="#">'.$dall->nama_destinasi.'</a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="lihat/'.$dall->id_destinasi.'" class="btn btn-template-transparent-primary">Lihat</a>
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