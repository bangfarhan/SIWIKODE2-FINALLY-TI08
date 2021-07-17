<section style="margin-top: -50px;" class="content-header">
    <a href="#">
        <h1>
            Wishlist
        </h1>
    </a>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Wishlist</a></li>
    </ol>
    <div id="flash" data-flash="<?= $this->session->flashdata('success');
                                $this->session->unset_userdata('success'); ?>"></div>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php foreach ($row->result() as $key => $data) {
                if ($data->id_pengguna == $this->session->userdata('id')) { ?>
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="../../upload/foto/<?= $data->foto_wisata ?>" height="150px" width="150px">
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <h4 class="mb-1"><?= $data->wisata_nama ?></h4>
                                </div>
                                <div style="margin-top: 10px;">
                                    <p style="font-size: 15px;" class="mb-1">Created date :&nbsp;<?= $data->create_date ?> </p>
                                </div>
                                <div class="col">
                                    <form action="<?= site_url('User/ker_del/' . $data->id) ?>">
                                        <button class="btn btn-xs btn-danger">hapus</button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php }
            } ?>
        </div>
</section>