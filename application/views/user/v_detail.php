<section style="margin-top: -50px;" class="content-header">
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <div class="container">
                <h2>
                    Detail Wisata
                </h2>
            </div>
        </div>
        <div id="flash" data-flash="<?= $this->session->flashdata('success');
                                    $this->session->unset_userdata('success'); ?>"></div>
        <div class="box-body">
            <div class="box-body">
                <div class="row">
                    <div class="container-fluid">
                        <div class="card">
                            <?php foreach ($row->result() as $key => $data) { ?>
                                <div class="wrapper row">
                                    <div class="col-md-6">
                                        <div>
                                            <img style="margin: 10px;" width="100%" height="300px" src="../../upload/foto/<?= $data->foto1 ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3><?= $data->nama ?></h3>
                                        <div style="color: yellow;">
                                            <?php for ($jl = 1; $jl <= $data->bintang; $jl++) {
                                                echo "<i class='fa fa-star'></i>";
                                            } ?>
                                        </div>
                                        <h5><strong>Deskripsi</strong>&nbsp;&nbsp;:</h5>
                                        <p class="product-description"><?= $data->deskripsi ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="margin-top: 25px;" class="col-md-6">
                                        <h5 style="margin-left: 30px;"><strong>Alamat</strong>&nbsp;&nbsp;&nbsp;&nbsp;:<span><?= $data->alamat ?></span></h5>
                                        <h5 style="margin-left: 30px;"><strong>Fasilitas</strong>&nbsp;&nbsp;: <span><?= $data->fasilitas ?></span></h5>
                                        <h5 style="margin-left: 30px;"><strong>Kontak</strong>&nbsp;&nbsp;&nbsp;&nbsp;: <span><?= $data->kontak ?></span></h5>
                                        <h5 style="margin-left: 30px;"><strong>Email</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span><?= $data->email ?></span></h5>
                                        <h5 style="margin-left: 30px;"><strong>Website</strong>&nbsp;&nbsp;: <span><a href="https://godongijo.com/"><?= $data->web ?></a></span></h5>
                                        <div style="text-align: center;">
                                            <?php if ($this->session->userdata('status') == 'login') { ?>
                                                <form method="POST" action="<?= site_url('user/ker_add') ?>">
                                                    <input type="hidden" name="wisata_id" value="<?= $data->id ?>">
                                                    <input type="hidden" name="id_pengguna" value="<?= $this->session->userdata('id') ?>">
                                                    <button type="submit" class="btn btn-default">Tambah ke wishlist<i class="fa fa-heart"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-default">Tambah ke wishlist<i class="fa fa-heart"></i></button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="margin: 10px;">
                                            <?= $data->maps ?>
                                        </div>
                                    </div>
                                </div>
                                <div style="border: 1px solid black; margin-top: 30px;" class="container-fluid">
                                    <h2 class="text-center">Testimoni</h2>
                                    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <?php $no = 0;
                                            foreach ($tes->result() as $key => $data1) {
                                                if ($data1->wisata_id == $data->id) {
                                                    $no++;
                                            ?>
                                                    <li data-target="#myCarousel" data-slide-to="<?= $no ?>" class="<?= $no == 1 ? 'active' : null ?>"></li>
                                            <?php
                                                }
                                            } ?>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <?php $no = 0;
                                            foreach ($tes->result() as $key => $data1) {
                                                if ($data1->wisata_id == $data->id) {
                                                    $no++;
                                            ?>
                                                    <div class="item <?= $no == 1 ? 'active' : null ?>">
                                                        <h4>"<?= $data1->komentar ?>"<br><br><span style="font-style:normal; color: yellow;"><?php for ($jl = 1; $jl <= $data1->rating; $jl++) {
                                                                                                                                                    echo "<i class='fa fa-star'></i>";
                                                                                                                                                } ?></span><br><span style="font-style:normal;">-<?= $data1->nama ?></span><br><span style="font-style:normal;"><?= $data1->profesi ?></span></h4>
                                                    </div>
                                            <?php
                                                }
                                            } ?>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div style="margin: 5px;" align="center">
                                        <button data-toggle="modal" class="btn btn-success " data-target="#addtes">Tambah testimoni</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="addtes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">Tambah Testimoni</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= site_url('user/tes_add') ?>">
                    <div class="form-group <?= form_error('nama') ? 'has-error' : null ?>">
                        <input type="hidden" name="create_date" value="<?= date('Y-m-d H:i:s') ?>">
                        <input type="hidden" name="update_date" value="<?= date('Y-m-d H:i:s') ?>">
                        <label>Nama *</label>
                        <input required type="text" name="nama" class="form-control">
                        <input required type="hidden" name="wisata_id" value="<?= $data->id ?>" class="form-control">
                        <span class="help-block"><?= form_error('nama') ?></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input required name="email" class=" form-control"></input>
                    </div>
                    <div class="form-group">
                        <label>Profesi</label>
                        <select required name="profesi_id" class="form-control">
                            <option selected="true" disabled="disabled">--Pilih--</option>
                            <?php foreach ($profesi->result() as $key => $data) { ?>
                                <option value="<?= $data->id ?>"><?= $data->nama ?></option>
                            <?php } ?>
                        </select>
                        <span class="help-block"><?= form_error('jk') ?></span>
                    </div>
                    <div class="form-group">
                        <label>Komentar *</label>
                        <textarea required name="komentar" class=" form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <?php for ($jl = 1; $jl <= 5; $jl++) { ?>
                            <input type="radio" id='ida<?= $jl ?>' name='rating' value="<?= $jl ?>">
                            <label for="ida<?= $jl ?>"><?= $jl ?><i style="color: yellow;" class='fa fa-star'></i></label>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>