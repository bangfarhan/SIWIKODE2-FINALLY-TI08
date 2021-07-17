<section style="margin-top: -50px;" class="content-header">
    <a href="#">
        <h1>
            Tambah User
        </h1>
    </a>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Tambah User</a></li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <div class="pull-right">
                <a href="<?= site_url('Admin\/user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('admin/user_edit/' . $row->id); ?>
                    <div class="form-group <?= form_error('nama') ? 'has-error' : null ?>">
                        <input type="hidden" name="create_date" value="1">
                        <input type="hidden" name="create_date" value="<?= date('Y-m-d H:i:s') ?>">
                        <input type="hidden" name="update_date" value="<?= date('Y-m-d H:i:s') ?>">
                        <input value="<?= $row->id ?>" type="hidden" name="id" class=" form-control">
                        <label>Nama *</label>
                        <input type="text" name="nama" class="form-control" value="<?= $row->nama ?>">
                        <span class="help-block"><?= form_error('nama') ?></span>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class=" form-control" value="<?= $row->alamat ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>No.HP</label>
                        <input name="hp" class=" form-control" value="<?= $row->hp ?>"></input>
                    </div>
                    <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                        <label>Username *</label>
                        <input name="username" class=" form-control" value="<?= $row->username ?>"></input>
                        <span class="help-block"><?= form_error('username') ?></span>
                    </div>
                    <div class="form-group" <?= form_error('jk') ? 'has-error' : null ?>>
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option selected="true" disabled="disabled">--Pilih--</option>
                            <option value="Laki-laki" <?= $row->jk == 'Laki-laki' ? 'selected' : null ?>>Laki-laki</option>
                            <option value="Perempuan" <?= $row->jk == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
                        </select>
                        <span class="help-block"><?= form_error('jk') ?></span>
                    </div>
                    <div class="form-group">
                        <label>password<span>(Kosongkan jika tidak diganti)</span></label>
                        <input name="password" type="password" class=" form-control"></input>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="image" class=" form-control-file">
                        <input type="hidden" name="foto_lama" class=" form-control" value="<?= $row->foto ?>">
                    </div>
                    <?php if ($this->session->userdata('id_status') == 1) { ?>
                        <div class="form-group">
                            <input type="radio" id='ida' name='id_status' value="1" <?= $row->id_status == 1 ? 'checked' : 'null' ?>>
                            <label for="ida">Admin</label>
                            <input type="radio" id="idu" name='id_status' value="2" <?= $row->id_status == 2 ? 'checked' : 'null' ?>>
                            <label for="idu">User</label>
                        </div>
                    <?php } ?>
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