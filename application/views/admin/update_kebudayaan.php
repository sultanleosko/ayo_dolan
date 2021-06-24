<div class="content-wrapper">
    <section class="content-header">
        <h1>Update Kebudayaan</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Update Data</a></li>
            <li class="active">Update Kebudayaan</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Update Kebudayaan</h3>
                    </div>

                    <div class="box-body">
                        <form action="<?php echo base_url(); ?>kebudayaan/do_update" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $form_data->id ?>">
                            <div class="form-group">
                                <label>Nama Kebudayaan</label>
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Kebudayaan" value="<?php echo $form_data->name ?>">
                            </div>
                            <div class="form-group">
                                <label>Gambar Kebudayaan</label>
                                 <input type="file" name="pic" id="pic" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Kebudayaan</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Masukkan Deskripsi Kebudayaan"><?php echo $form_data->description ?></textarea>
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
</div>
