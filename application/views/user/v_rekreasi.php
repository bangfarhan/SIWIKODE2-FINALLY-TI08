<section style="margin-top: -50px;" class="content-header">
</section>
<section class="content">
    <div class="box card">
        <div class="box-header with-border">
            <div class="container">
                <div class="row" role="group" aria-label="Basic example">
                    <h2>
                        Wisata
                    </h2>
                    <a href="#Religi" class="btn btn-primary">Religi</a>
                    <a href="#Taman" class="btn btn-primary">Taman Wisata</a>
                    <a href="#WaterPark" class="btn btn-primary">Water Park</a>
                </div>
            </div>
        </div>
        <div id="flash" data-flash="<?= $this->session->flashdata('success');
                                    $this->session->unset_userdata('success'); ?>"></div>
        <div class="box-body">
            <div id="Religi" class="container-fluid ">
                <div class="card shadow-lg p-5">
                <h4 style="text-align: center;" class="card-header ">Wisata Religi</h4>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($row->result() as $key => $data) {
                            if ($data->wisata_nama == 'Religi') { ?>
                                <div class="col-md-6">
                                    <div class="list-group">
                                        <a href="<?= site_url('User/detail/' . $data->id) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img width="200px" height="150px" src="../upload/foto/<?= $data->foto1 ?>">
                                                    </td>
                                                    <td style="padding-left: 25px;">
                                                        <h3 style="" class="mb-1"><?= $data->nama ?></h3>
                                                        <p style="font-size: 15px;" class="mb-1">Wisata&nbsp;&nbsp;:&nbsp;<?= $data->wisata_nama ?> </p>
                                                        <p style="font-size: 15px;" class="mb-1">Kuliner&nbsp;&nbsp;:&nbsp;<?= $data->kuliner_nama ?> </p>
                                                        <a href="<?= site_url('User/detail/' . $data->id) ?>" class="btn btn-primary btn-xs">Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </a>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Taman"  class="container-fluid ">
                <div class="card p-5">
                <h4 style="text-align: center;" class="card-header">Taman Wisata</h4>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($row->result() as $key => $data) {
                            if ($data->wisata_nama == 'Taman Wisata') { ?>
                                <div class="col-md-6">
                                    <div class="list-group">
                                        <a href="<?= site_url('User/detail/' . $data->id) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img width="200px" height="150px" src="../upload/foto/<?= $data->foto1 ?>">
                                                    </td>
                                                    <td style="padding-left: 25px;">
                                                        <h3  class="mb-1"><?= $data->nama ?></h3>
                                                        <p style="font-size: 15px;" class="mb-1">Wisata&nbsp;&nbsp;:&nbsp;<?= $data->wisata_nama ?> </p>
                                                        <p style="font-size: 15px;" class="mb-1">Kuliner&nbsp;&nbsp;:&nbsp;<?= $data->kuliner_nama ?> </p>
                                                        <a href="<?= site_url('User/detail/' . $data->id) ?>" class="btn btn-primary btn-xs">Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </a>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="WaterPark" class="container-fluid ">
                <div class="card p-5">
                <h4 style="text-align: center;" class="card-header">Water Park</h4>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($row->result() as $key => $data) {
                            if ($data->wisata_nama == 'Water Park') { ?>
                                <div class="col-md-6">
                                    <div class="list-group">
                                        <a href="<?= site_url('User/detail/' . $data->id) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img width="200px" height="150px" src="../upload/foto/<?= $data->foto1 ?>">
                                                    </td>
                                                    <td style="padding-left: 25px;">
                                                        <h3 style="" class="mb-1"><?= $data->nama ?></h3>
                                                        <p style="font-size: 15px;" class="mb-1">Wisata&nbsp;&nbsp;:&nbsp;<?= $data->wisata_nama ?> </p>
                                                        <p style="font-size: 15px;" class="mb-1">Kuliner&nbsp;&nbsp;:&nbsp;<?= $data->kuliner_nama ?> </p>
                                                        <a href="<?= site_url('User/detail/' . $data->id) ?>" class="btn btn-primary btn-xs">Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </a>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>