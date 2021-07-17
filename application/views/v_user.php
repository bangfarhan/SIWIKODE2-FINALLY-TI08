<section style="margin-top: -50px;" class="content-header">
    <a href="#">
        <h1>
            User
        </h1>
    </a>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
    </ol>
    <div id="flash" data-flash="<?= $this->session->flashdata('success');
                                $this->session->unset_userdata('success'); ?>"></div>
</section>
<section class="content">
    <div class="box card">
        <div class="box-header with-border">
            <div class="pull-right">
                <a href="<?= site_url('admin/user_add') ?>" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i> Add
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table class="table table-hover table-bordered" id="tab2">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10px">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">No.HP</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Dibuat Tanggal</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td class="text-center"><?= $data->nama ?></td>
                            <td class="text-center"><a href="../upload/foto/<?= $data->foto ?>">
                                    <image height="50px" widht="50px" src="../upload/foto/<?= $data->foto ?>"></image>
                                </a></td>
                            <td class="text-center"><?= $data->alamat ?></td>
                            <td class="text-center"><?= $data->hp ?></td>
                            <td class="text-center"><?= $data->username ?></td>
                            <td class="text-center"><?= $data->jk ?></td>
                            <td class=" text-center"><?= $data->id_status == 1 ? 'Admin' : 'User' ?>
                            </td>
                            <td class="text-center"><?= $data->create_date ?></td>
                            <td class="text-center"><?= $data->update_date ?></td>
                            <td class="text-center">
                                <a href="<?= site_url('Admin/user_edit/' . $data->id) ?>" class="btn btn-success btn-xs">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="<?= site_url('Admin/user_del/' . $data->id) ?>" id="hps" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                                </a>
                            </td>
                        </tr>
                    <?php
                        $no = $no + 1;
                    } ?>
                </tbody>
            </table>
        </div>
</section>