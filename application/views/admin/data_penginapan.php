<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Penginapan<small>tampilan dari tabel penginapan</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manajemen Data</a></li>
            <li class="active">Data Penginapan</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th style="width: 225px">Nama Destinasi</th>
                                <th style="width: 400px">Intro Destinasi</th>
                                <th style="width: 250px">Gambar Destinasi</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>

                            <?php 
                                foreach ($data_destinasi as $dd) {
                                    echo '
                                        <tr>
                                            <td>'.$dd->id_destinasi.'</td>
                                            <td>'.$dd->nama_destinasi.'</td>
                                            <td>'.$dd->intro_destinasi.'</td>
                                            <td>'.$dd->gambar_destinasi.'</td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                                <a href="'.base_url().'admin/hapus/'.$dd->id_destinasi.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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