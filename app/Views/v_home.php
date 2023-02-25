<div class="col-lg-4 col-12">
  <!-- small card -->
  <div class="small-box bg-warning">
    <div class="inner">
      <h3>6.720.443</h3>
      <p>Total Positif</p>
    </div>
    <div class="icon">
      <i class="fas fa-hospital"></i>
    </div>
    <a href="#" class="small-box-footer">
     
    </a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-4 col-12">
  <!-- small card -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3>6.550.677</h3>
      <p>Total Sembuh</p>
    </div>
    <div class="icon">
      <i class="fas fa-smile"></i>
    </div>
    <a href="#" class="small-box-footer">
     
    </a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-4 col-12">
  <!-- small card -->
  <div class="small-box bg-danger">
    <div class="inner">
      <h3>160.635</h3>

      <p>Total Meninggal</p>
    </div>
    <div class="icon">
      <i class="fas fa-bed"></i>
    </div>
    <a href="#" class="small-box-footer">
     
    </a>
  </div>
</div>

<div class="col-lg-12 col-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Provinsi - <?= $prov['last_date'] ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
          <thead>
          <tr>
            <th>No</th>
            <th>Provinsi</th>
            <th>Positif</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
          </tr>
          </thead>
          <tbody>
                <?php $no =1;
                  foreach($prov['list_data'] as $key => $value){ ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?=  $value['key']; ?></td>
                    <td><?=  number_format($value['jumlah_kasus'],0); ?></td>
                    <td><?=  number_format($value['jumlah_sembuh'],0); ?></td>
                    <td><?=  number_format($value['jumlah_meninggal'],0); ?></td>
                    </tr>
                <?php } ?>
              </tbody>
        </table>
      </div>
    </div>
</div>
