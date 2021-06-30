<div class="content-wrapper">
    <section class="content-header">
        <h1>Tabel User</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tabel</a></li>
            <li class="active">Tabel User</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                       <!--<div class="box-tools">
                            <a href="<?php echo base_url(); ?>admin/tambah_user_view" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        </div>-->
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th style="width: 200px">Nama Lengkap</th>
                                <th style="width: 150px">Email</th>
                                <th style="width: 100px">Username</th>
                                <th style="width: 250px">Alamat</th>
                                <th style="width: 85px">Aksi</th>
                            </tr>

                            <?php 
                                foreach ($tabel_user as $tu) {
                                    echo '
                                        <tr>
                                            <td>'.$tu->id_user.'</td>
                                            <td>'.$tu->nama_lengkap.'</td>
                                            <td>'.$tu->email.'</td>
                                            <td>'.$tu->username.'</td>
                                            <td>'.$tu->alamat.'</td>
                                            <td>
                                                
                                                <a href="'.base_url().'admin/hapus_user/'.$tu->id_user.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> </a>
                                            </td>
                                        </tr>
                                    ';
                                } 
                            ?>
                            <!--<tr>
                                <td>219</td>
                                <td>Alexander Pierce</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-danger">Denied</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                            </tr>-->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
