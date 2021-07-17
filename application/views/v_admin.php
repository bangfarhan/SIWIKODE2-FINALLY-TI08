<section style="margin-top: -50px;" class="content-header">
    <a href="#">
        <h1>
            Data Wisata
        </h1>
    </a>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Data Wisata</a></li>
    </ol>
    <div id="flash" data-flash="<?= $this->session->flashdata('success');
                                $this->session->unset_userdata('success'); ?>"></div>
</section>
<section class="content">
    <div class="box card">
        <div class="box-header with-border">
            <div class="pull-right">
                <a href="<?= site_url('admin/add') ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i>&nbsp Add
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table class="table table-hover table-bordered" id="tab1">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10px">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Fasilitas</th>
                        <th class="text-center">Bintang</th>
                        <th class="text-center">Kontak</th>
                        <th class="text-center">alamat</th>
                        <th class="text-center">Maps</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Web</th>
                        <th class="text-center">Jenis Wisata</th>
                        <th class="text-center">Jenis Kuliner</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td class="text-center"><?= $data->nama ?></td>
                            <td class="text-center"><?= $data->deskripsi ?></td>
                            <td class="text-center">
                                <a href="./upload/foto/<?= $data->foto1 ?>">
                                    <image height="50px" widht="50px" src="./upload/foto/<?= $data->foto1 ?>"></image>
                                </a>
                            </td>
                            <td class=" text-center"><?= $data->fasilitas ?>
                            </td>
                            <td class="text-center"><?php for ($jl = 1; $jl <= $data->bintang; $jl++) {
                                                        echo "<i class='fa fa-star'>";
                                                    } ?></i></td>
                            <td class="text-center"><?= $data->kontak ?></td>
                            <td class="text-center"><?= $data->alamat ?></td>
                            <td class="text-center"><?= $data->maps ?></td>
                            <td class="text-center"><?= $data->email ?></td>
                            <td class="text-center"><?= $data->web ?></td>
                            <td class="text-center"><?= $data->wisata_nama ?></td>
                            <td class="text-center"><?= $data->kuliner_nama ?></td>
                            <td class="text-center">
                                <a href="<?= site_url('Admin/edit/' . $data->id) ?>" class="btn btn-success btn-xs">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="<?= site_url('Admin/del/' . $data->id) ?>" id="hps" class="btn btn-danger btn-xs">
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