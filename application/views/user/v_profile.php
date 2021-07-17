<section style="margin-top: -50px;" class="content-header">
    <a href="#">
        <h1>
            Profile User
        </h1>
    </a>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Profile</a></li>
    </ol>
    <div id="flash" data-flash="<?= $this->session->flashdata('success');
                                $this->session->unset_userdata('success'); ?>"></div>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col-md-3" align="center">
                    <img style="margin-top: 50px;" height="250px" width="100%" src="../../upload/foto/<?= $row->foto ?>">
                    <a href="<?= site_url('User/user_edit/' . $row->id) ?>" style="margin-top: 10px;" class="btn btn-success">Edit profile</a>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-2">
                            <hr>
                            <h5>Nama</h5>
                            <hr>
                            <h5>Alamat</h5>
                            <hr>
                            <h5>No.HP</h5>
                            <hr>
                            <h5>Jenis Kelamin</h5>
                            <hr>
                            <h5>Role</h5>
                            <hr>
                            <h5>Created date</h5>
                            <hr>
                            <h5>Last Updated</h5>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <hr style="margin-left: -50px;">
                            <h5>:&nbsp;<?= $row->nama ?></h5>
                            <hr style="margin-left: -50px;">
                            <h5>:&nbsp;<?= $row->alamat ?></h5>
                            <hr style="margin-left: -50px;">
                            <h5>:&nbsp;<?= $row->hp ?></h5>
                            <hr style="margin-left: -50px;">
                            <h5>:&nbsp;<?= $row->jk ?></h5>
                            <hr style="margin-left: -50px;">
                            <h5>:&nbsp;<?= $row->id_status == 1 ? 'admin' : 'user' ?></h5>
                            <hr style="margin-left: -50px;">
                            <h5>:&nbsp;<?= $row->create_date ?></h5>
                            <hr style="margin-left: -50px;">
                            <h5>:&nbsp;<?= $row->update_date ?></h5>
                            <hr style="margin-left: -50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>