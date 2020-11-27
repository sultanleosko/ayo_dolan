<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Penginapan</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li>Penginapan</li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                        <h3 class="panel-title">Urutkan Hasil Pencarian</h3>
                    </div>

                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Harga Tertinggi
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Harga Terendah
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-default btn-sm btn-template-main">
                                <i class="fa fa-pencil"></i> Apply
                            </button>
                        </form>
                    </div>
                </div>
                <div class="banner">
                    <a href="shop-category.html">
                        <img src="<?php echo base_url(); ?>assets/img/banner.jpg" alt="sales 2014" class="img-responsive">
                    </a>
                </div>
            </div>


            <div class="col-sm-9">
                <?php
                    foreach ($all_penginapan as $pall) {
                         echo '
                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="penginapan/lihat_penginapan/'.$pall->id_penginapan.'">
                                            <img src="'.base_url().'/assets/img/'.$pall->gambar_penginapan.'" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>'.$pall->nama_penginapan.'</h3>
                                        <p class="price">Rp. '.$pall->harga_penginapan.',-</p>
                                    </div>
                                </div>
                            </div>
                         ';
                     } 
                ?>
                    
            </div>
        </div>
    </div>
</div>