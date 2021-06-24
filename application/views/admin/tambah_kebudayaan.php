<div class="content-wrapper">
    <section class="content-header">
        <h1>Tambah Kebudayaan</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tambah Data</a></li>
            <li class="active">Tambah Kebudayaan</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Tambah Kebudayaan</h3>
                    </div>

                    <div class="box-body">
                        <form action="<?php echo base_url(); ?>kebudayaan/do_add" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Kebudayaan</label>
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Kebudayaan">
                            </div>
                            <div class="form-group">
                                <label>Gambar Kebudayaan</label>
                                 <input type="file" name="pic" id="pic" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Kebudayaan</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Masukkan Deskripsi Kebudayaan"></textarea>
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" value="Tambah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
</div>
