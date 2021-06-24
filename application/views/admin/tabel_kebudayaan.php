<div class="content-wrapper">
    <section class="content-header">
        <h1>Tabel Kebudayaan</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tabel</a></li>
            <li class="active">Tabel Kebudayaan</li>
        </ol>
    </section>


    <!-- modal -->
    <div class="example-modal">
        <div class="modal modal-warning">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Warning Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                        <div class="box-tools">
                            <a href="<?php echo base_url(); ?>admin/tambah_kebudayaan_view" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                        </div>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th style="width: 225px">Nama Kebudayaan</th>
                                <th style="width: 400px">Deskripsi</th>
                                <th style="width: 85px">Aksi</th>
                            </tr>

                            <?php 
                                foreach ($tabel_kebudayaan as $td) {
                                    echo '
                                        <tr>
                                            <td>'.$td->id.'</td>
                                            <td>'.$td->name.'</td>
                                            <td>'.$td->description.'</td>
                                            <td>
                                                <a href="'.base_url().'admin/update_kebudayaan_view/'.$td->id.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i> </a>
                                                <a href="'.base_url().'admin/hapus_kebudayaan/'.$td->id.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> </a>
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
