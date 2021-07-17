<section style="margin-top: -50px;" class="content-header">
    <a href="#">
        <h1>
            Edit Wisata
        </h1>
    </a>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Data Wisata</a></li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <div class="pull-right">
                <a href="<?= site_url('Admin') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <?php echo form_open_multipart('admin/edit/' . $row->id); ?>
                    <div class="form-group <?= form_error('nama') ? 'has-error' : null ?>">
                        <label>Nama *</label>
                        <input value="<?= $row->nama ?>" type="text" name="nama" class="form-control">
                        <span class="help-block"><?= form_error('nama') ?></span>
                    </div>
                    <div class="form-group <?= form_error('deskripsi') ? 'has-error' : null ?>">
                        <label>Deskripsi *</label>
                        <textarea name="deskripsi" class=" form-control"><?= $row->deskripsi ?></textarea>
                        <span class="help-block"><?= form_error('deskripsi') ?></span>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="image" class=" form-control">
                        <input type="hidden" name="foto_lama" class=" form-control" value="<?= $row->foto1 ?>">
                    </div>
                    <div class="form-group">
                        <label>Fasilitas</label>
                        <input value="<?= $row->fasilitas ?>" type="text" name="fasilitas" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label>Bintang</label>
                        <input value="<?= $row->bintang ?>" type="text" name="bintang" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label>Kontak</label>
                        <input value="<?= $row->kontak ?>" type="text" name="kontak" class=" form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input value="<?= $row->alamat ?>" type="text" name="alamat" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label>Maps</label>
                        <input value="<?= $row->alamat ?>" type="text" name="maps" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input value="<?= $row->email ?>" type="text" name="email" class=" form-control">
                        <input value="<?= $row->id ?>" type="hidden" name="id" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label>Web</label>
                        <input value="<?= $row->web ?>" type="text" name="web" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Wisata Rekreasi</label>
                        <select name="jenis_wisata" class="form-control">
                            <?php foreach ($jenis_wisata->result() as $key => $data) { ?>
                                <option value="<?= $data->id ?>" <?= $data->nama == $row->wisata_nama ? "selected" : null ?>><?= $data->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Wisata Kuliner</label>
                        <select name="jenis_kuliner" class="form-control">
                            <?php foreach ($jenis_kuliner->result() as $key => $data) { ?>
                                <option value="<?= $data->id ?>" <?= $data->nama == $row->kuliner_nama ? "selected" : null ?>><?= $data->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</section>
</div>
</div>
<!-- Main content ends -->
<!-- Container-fluid ends -->
</div>
</div>