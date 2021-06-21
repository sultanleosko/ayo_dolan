<section>
    <div class="home-carousel">
        <div class="dark-mask"></div>
        <div class="container">
            <div class="homepage owl-carousel">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right"> 
                            <p><img src="<?php echo base_url();?>assets/img/logo-baru-putih.png" alt=""></p>
                            <h1>Ayo Dolan!!</h1>
                            <p>Pemesanan paket wisata dengan harga terjangkau</p>
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
                            <h2>Pemesanan yang mudah</h2>
                            <ul class="list-style-none">
                                <li>Klik order</li>
                                <li>Transfer</li>
                                <li>Berangkat!!</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right">
                            <h1>Pelayanan terbaik</h1>
                            <ul class="list-style-none">
                                <li>Transportasi bersih dan aman</li>
                                <li>Sopir adalah guide</li>
                                <li>Perjalanan nyaman</li>
                                <li>Berlibur menyenangkan</li>
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
                            <h1>Liburanmu adalah hakmu !!</h1>
                            <ul class="list-style-none">
                                <li>Bisa prepare dalam sehari</li>
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
                            <h3>Jaminan Harga Terbaik</h3>
                            <p>Bekerja sama dengan berbagai hotel dan agen agen terbaik untuk mendapatkan harga terbaik dan dapatkan diskon eksklusif hingga 50%.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon">
                                <i class="fa fa-print"></i>
                            </div>
                            <h3>Pemesanan Yang Mudah</h3>
                            <p>Pesan tiket online dan travel hanya dengan mengunjungi website lalu klik pesan bisa dengan mudah keliling indonesia.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3>Tanpa Biaya Tersembunyi</h3>
                            <p>Biaya yang anda lihat adalah final tanpa di pungut biaya tambahan.</p>
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
                                            <p class="hidden-sm">'.$psix->deskripsi.'</p>
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
                    <h3>Destinasi Malang</h3>
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
                    <h3>Kebudayaan</h3>
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
                                <p>Saya sekeluarga melakukan tour wisata ke Bromo tanggal 22 April 2017 lalu dengan menggunakan jasa paket wisata Ayo Dolan. Servicenya sungguh memuaskan mulai harga yang murah, pemesanan cepat, pelayanan ramah dan wisata berjalan baik, juga menyenangkan.</p>
                            </div>
                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/customer-1.jpg">
                                    <h5>Norton Rafli</h5>
                                    <p>Siswa - SMK Telkom Malang</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial same-height-always">
                            <div class="text">
                                <p>Nggak ada kata lain deh!! Pokoknya murah, cepat, dan pelayanan yang sangat bagus. Kemarin berwisata ke BROMO tanggal 1 April 2017 sangat terasa menyenangkan. Bawa mobil dengan halus dan driver tau tempat foto yang menarik di Bromo. Intinya aku gak nyesel pilih Ayo Dolan!</p>
                            </div>
                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/customer-2.jpg">
                                    <h5>Rama Surya</h5>
                                    <p>Siswa - SMK Telkom Malang</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial same-height-always">
                            <div class="text">
                                <p>Emang nggak salah aku pesan tiket di Ayo Dolan. Walaupun cuman sehari, perjalanannya sangat menyenangkan. Aku pergi ke Pantai di Malang bersama teman-teman sekolah. Seharian kami merasakan suasana pantai yang sangat damai.</p>
                            </div>
                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/customer-3.jpg">
                                    <h5>Afkar Subhan</h5>
                                    <p>Siswa - SMK Telkom Malang</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial same-height-always">
                            <div class="text">
                                <p>Terimakasih Ayo Dolan! Berkat layanan yang cepat, tanggap, dan ramah saya dan teman-teman saya dapat rekreasi kapanpun. Ketika saya ingin berwisata di Malang pasti saya akan menggunakan Ayo Dolan lagi!</p>
                            </div>

                            <div class="bottom">
                                <div class="icon"><i class="fa fa-quote-left"></i>
                                </div>
                                <div class="name-picture">
                                    <img class="" alt="" src="<?php echo base_url();?>assets/img/person-4.jpg">
                                    <h5>Ikmal Hamas</h5>
                                    <p>Siswa - SMK Telkom Malang</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>