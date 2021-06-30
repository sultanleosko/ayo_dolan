<section>
    <div class="home-carousel">
        <div class="dark-mask"></div>
        <div class="container">
            <div class="homepage owl-carousel">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right"> 
                            <p><img src="<?php echo base_url();?>assets/img/logolima.png" alt=""></p>
                            <h1>Timor Travell!!</h1>
                            <p>informasi dan paket parawisata terbaik di Pulau Timor </p>
                        </div>
                        <div class="col-sm-7">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-7 text-center">
                            
                        </div>

                        <div class="col-sm-5">
                            <h2>pelayanan terbaik</h2>
                            <ul class="list-style-none">
                                <li>Informasi wisata terbaik di Pulau Timor</li>
                                <li>Informasi kebudayaan di Pulau Timor</li>
                                <li>Paket wisata terbaik di Pulau Timor</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right">
                            <h1>pemesanan paket wisata</h1>
                            <ul class="list-style-none">
                                <li>Klik order</li>
                                <li>Transfer</li>
                                <li>Berangkat!!</li>
                            </ul>
                        </div>
                        <div class="col-sm-7">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-7">
                            
                        </div>
                        <div class="col-sm-5">
                            <h1>Travelling bersama Timor Travell!!</h1>
                            <ul class="list-style-none">
                                <li>TIMOR BEDA NA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        

<section class="bar background-white no-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <h3>Informasi wisata terbaik</h3>
                            <p>Memberikan informasi tentang objek-objek wisata terbaik yang ada di Pulau Timor dan memberikan deskripsi secara detail pada setiap objek wisata.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon">
                                <i class="fa fa-print"></i>
                            </div>
                            <h3>Pemesanan paket wisata</h3>
                            <p>Pesan tiket online hanya dengan mengunjungi website tanpa perlu datang ke tempat wisata dan anda bisa langsung mengelilingin Pulau Timor.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3>Informasi kebudayaan</h3>
                            <p>Melihat berbagai kebudayaan di Pulau Timor dengan informasi yang lengkap.</p>
                        </div>
                    </div>
                </div>
                
                <div class="heading text-center">
                    <h3>Paket Wisata</h3>
                </div>

                <div class="row portfolio no-space">
                    <?php
                        foreach ($six_paket as $psix) {
                            echo '
                                <div class="col-md-4">
                                    <div class="box-image">
                                        <div class="image">
                                            <img src="'.base_url().'/assets/img/'.$psix->gambar_paket.'" alt="" class="img-responsive">
                                        </div>
                                        <div class="bg"></div>
                                        <div class="name">
                                            <h3><a href="#">'.$psix->nama_paket.'</a></h3> 
                                        </div>
                                        <div class="text">
                                            <p class="buttons">
                                                <a href="paket/lihat_paket/'.$psix->id_paket.'" class="btn btn-template-transparent-primary">Lihat</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }        
                    ?>
                </div>
                <div class="see-more">
                    <a href="<?php echo base_url(); ?>paket/semua_paket" class="btn btn-template-main">Lihat Semua Paket Wisata</a>
                </div>
                <br>

                <hr>

                <div class="heading text-center">
                    <h3>Destinasi Timor</h3>
                </div>

                <div class="row portfolio no-space">
                    <?php
                        foreach ($six_destinasi as $dsix) {
                            echo '
                                <div class="col-md-4">
                                    <div class="box-image">
                                        <div class="image">
                                            <img src="'.base_url().'/assets/img/'.$dsix->gambar_destinasi.'" alt="" class="img-responsive">
                                        </div>
                                        <div class="bg"></div>
                                        <div class="name">
                                            <h3><a href="#">'.$dsix->nama_destinasi.'</a></h3> 
                                        </div>
                                        <div class="text">
                                            <p class="buttons">
                                                <a href="destinasi/lihat/'.$dsix->id_destinasi.'" class="btn btn-template-transparent-primary">Lihat</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }        
                    ?>
                </div>
                <div class="see-more">
                    <a href="<?php echo base_url(); ?>destinasi/semua_destinasi" class="btn btn-template-main">Lihat Semua Destinasi</a>
                </div>

                <hr>

                <div class="heading text-center">
                    <h3>Kebudayaan Timor</h3>
                </div>

                <div class="row portfolio no-space">
                    <?php
                        foreach ($two_kebudayaan as $twoKeb) {
                            echo '
                                <div class="col-md-4">
                                    <div class="box-image">
                                        <div class="image">
                                            <img src="'.base_url().'/assets/img/'.$twoKeb->thumbnail.'" alt="" class="img-responsive">
                                        </div>
                                        <div class="bg"></div>
                                        <div class="name">
                                            <h3><a href="#">'.$twoKeb->name.'</a></h3> 
                                        </div>
                                        <div class="text">
                                            <p class="buttons">
                                                <a href="kebudayaan/lihat/'.$twoKeb->id.'" class="btn btn-template-transparent-primary">Lihat</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }        
                    ?>
                </div>
                <div class="see-more">
                    <a href="<?php echo base_url(); ?>kebudayaan/semua_kebudayaan" class="btn btn-template-main">Lihat Semua Kebudayaan</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="bar background-pentagon no-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading text-center">
                    <h2>Testimoni</h2>
                </div>
                <ul class="owl-carousel testimonials same-height-row">
                    <li class="item">
                        <div class="testimonial same-height-always">
                            <div class="text">
                                <p>Saya sekeluarga berlibur di Fulan Fehan 22 juni 2021 lalu dengan menggunakan jasa paket wisata Ayo Timor Travel. Servicenya sungguh memuaskan mulai dengan informasi yang lengkap,paket wisata yang terbaik, harga yang murah, pemesanan cepat dan juga menyenangkan.</p>
                            </div>
                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/customer-1.jpg">
                                    <h5>madi</h5>
                                    <p>mahasiswa - Unkris Kupang</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial same-height-always">
                            <div class="text">
                                <p>Nggak ada kata lain deh!! Pokoknya informasi destinasi wisatanya keren-keren dan juga sangan lengkap,kemarin saya berkunjung ke pantai kolbano setela saya melihat berbagai infromasi di aplikasi ini</p>
                            </div>
                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/customer-2.jpg">
                                    <h5>noldy </h5>
                                    <p>mahasiswa - Unkris Kupang</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial same-height-always">
                            <div class="text">
                                <p>Saya bisa mengetahui berbagai informasi tentang kebudayaan yang ada di Pulau Timor setelah berkunjung ke website ini.</p>
                            </div>
                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/customer-3.jpg">
                                    <h5>Putra </h5>
                                    <p>mahasiswa - poltek kupang</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial same-height-always">
                            <div class="text">
                                <p>Akhirnya saya bisa melakukan pemesanan tiket paket wisata secara online tanpa harus melakukan antrian pemesanan tiket wisata!</p>
                            </div>

                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/person-4.jpg">
                                    <h5>jope </h5>
                                    <p>mahasiswa - poltek kupang </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>