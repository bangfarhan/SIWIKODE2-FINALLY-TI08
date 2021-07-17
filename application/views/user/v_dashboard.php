<section class="content-header">
    <h1 style="font-size: 30px; text-align:center; ">SISTEM INFORMASI WISATA KOTA DEPOK</h1>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />


<section class="content">
    <div class="box card p-5">
        <!-- /.box-header -->
        <div class="box-body">
            <hr>
            <p style="font-size: 20px; text-align:center;">SIWIKODE adalah website aplikasi yang dibuat untuk mengetahui lokasi-lokasi wisata di Kota Depok
                baik wisata kuliner dan rekreasi yang pastinya berguna bagi para pendatang maupun warga Depok sendiri yang belum mengetahui lokasi wisata di Kota Depok
            </p>
            <hr>
            <div class="row dashboard-header ">
                <div class="col-lg-4 col-md-6">
                    <div class="card dashboard-product bg-primary">
                        <span>Religi</span>
                        <h2 class="dashboard-total-products">
                            <?= $jumlah_religi ?>
                        </h2>
                        <a href="<?= site_url('User/rekreasi#WaterPark') ?>" class="btn bg-white" type="button">Lihat semua</a>
                        <div style="margin-right: 25px;" class="side-box">
                            <i class="ti-signal text-white-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card dashboard-product bg-primary">
                        <span>Taman Wisata</span>
                        <h2 class="dashboard-total-products">
                            <?= $jumlah_taman_wisata ?>
                        </h2>
                        <a href="<?= site_url('User/rekreasi#WaterPark') ?>" class="btn bg-white" type="button">Lihat semua</a>
                        <div style="margin-right: 25px;" class="side-box">
                            <i class="ti-signal text-white-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card dashboard-product bg-primary">
                        <span>Water Park</span>
                        <h2 class="dashboard-total-products">
                            <?= $jumlah_water_park ?>
                        </h2>
                        <a href="<?= site_url('User/rekreasi#WaterPark') ?>" class="btn bg-white" type="button">Lihat semua</a>
                        <div style="margin-right: 25px;" class="side-box">
                            <i class="ti-signal text-white-color"></i>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header">
            <h3 class="text-center ">Developer Team</h3>
            </div>
            <div class="card-body">
            <div class="row">

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box text-white">
                <span class="info-box-icon bg-primary elevation-1 ">
                    <i class="fas fa-user-shield" style="color: white;"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Alfisyahri</span>
                  <span class="info-box-number">
                    0110220111
                    <small>TI08</small>
                  </span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box text-white">
                <span class="info-box-icon bg-primary elevation-1 ">
                    <i class="fas fa-user-shield" style="color: white;"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Arya Tiranda Wicaksana</span>
                  <span class="info-box-number">
                    0110220257          
                    <small>TI08</small>
                  </span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box text-white">
                <span class="info-box-icon bg-primary elevation-1 ">
                    <i class="fas fa-user-shield" style="color: white;"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Farhan Ma'arif Lubis</span>
                  <span class="info-box-number">
                    0110220116           
                    <small>TI08</small>
                  </span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
            </div>
            </div>
            </div>
        </div>
    </div>
</section>