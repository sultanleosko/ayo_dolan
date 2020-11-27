<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ayo Dolan</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo base_url();?>assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Css animations  -->
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/owl.theme.css" rel="stylesheet">
</head>

<body>
    <div id="all">
        <header>

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home" href="index.html">
                                <img src="<?php echo base_url();?>assets/img/logo-baru.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="<?php echo base_url();?>assets/img/logo-baru.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Ayo Dolan - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>


                        <div class="navbar-collapse collapse" id="navigation">
                            <ul class="nav navbar-nav navbar-right">   
                                <li>
                                <?php
                                    if($this->session->userdata('login') == TRUE) {
                                        echo '
                                            <a href="'.base_url().'account">Welcome, '.$this->session->userdata('username').'</a><li>
                                            <a href="'.base_url().'login/logout"><i class="fa fa-sign-out"></i> <span class="hidden-xs text-uppercase">Logout</a></li>
                                        ';
                                    } else {
                                        echo '
                                            <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Masuk</span></a>
                                            <li>
                                            <a href="'.base_url().'register"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Daftar</span></a></li>
                                        ';
                                    }
                                ?>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>home">Home</a>
                                </li>
                                <!--<li>
                                    <a href="<?php echo base_url(); ?>penginapan">Penginapan</a>
                                </li>-->
                                
                                <?php
                                    if($this->session->userdata('login') == TRUE) {
                                        if ($this->session->userdata('tipe_user') == '1') {
                                            echo '<li><a href="'.base_url().'admin">Halaman Admin</a></li>';
                                        } else {
                                            echo '<li><a href="'.base_url().'home/kontak">Kontak</a></li>'; 
                                        }
                                    } else {
                                        echo '<li><a href="'.base_url().'home/kontak">Kontak</a></li>';    
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="collapse clearfix" id="search">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Form Traveller</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>login/do_login" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username_modal" placeholder="username" name="username_login">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password" name="password_login">
                            </div>
                            <p class="text-center">
                                <input type="submit" name="submit_login" class="btn btn-template-main" value="Masuk">
                            </p>
                        </form>
                        <p class="text-center text-muted">Belum registrasi?<a href="<?php echo base_url(); ?>register"><strong> Registrasi</strong></a></p>
                    </div>
                </div>
            </div>
        </div>



        <?php
            if(!empty($main_view)){
                $this->load->view($main_view);
            }
        ?>



        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>Tentang Kami</h4>
                    <p>Kami adalah penyedia layanan pemesanan paket wisata di Kawasan Malang untuk tour satu hari.</p>
                    <hr class="hidden-md hidden-lg hidden-sm">
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Kontak</h4>
                    <p><strong>Ayo Dolan</strong>
                        <br>Jl. Simpang Sulfat Utara 3 No. 22A
                        <br>Malang
                        <br>Jawa Timur
                    </p>
                </div>
            </div>
        </footer>



        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left"><center>&copy;2017. Ayo Dolan.</center></p>
                </div>
            </div>
        </div>
    </div>


    <!-- #### JAVASCRIPT FILES ### -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/js/front.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>

    <!-- gmaps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="<?php echo base_url();?>assets/js/gmaps.js"></script>
    <script src="<?php echo base_url();?>assets/js/gmaps.init.js"></script>
    <!-- gmaps end -->
</body>
</html>