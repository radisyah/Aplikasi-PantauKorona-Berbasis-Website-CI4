<div class="col-lg-4 col-12">
  <!-- small card -->
  <div class="small-box bg-warning">
    <div class="inner">
      <h3><?= number_format($global['Global']['TotalConfirmed'],0)?></h3>
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
      <h3><?= number_format($global['Global']['TotalRecovered'],0)?></h3>
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
      <h3><?= number_format($global['Global']['TotalDeaths'],0)?></h3>

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
        <h3 class="card-title">Data Global - <?= $global['Date']?> </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
          <thead>
          <tr>
            <th>No</th>
            <th>Negara</th>
            <th>Positif</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
          </tr>
          </thead>
          <tbody>
                <?php $no =1;
                  foreach($global['Countries'] as $key => $value){ ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?=  $value['Country']; ?></td>
                    <td><?=  number_format($value['TotalConfirmed'],0); ?></td>
                    <td><?=  number_format($value['TotalRecovered'],0); ?></td>
                    <td><?=  number_format($value['TotalDeaths'],0); ?></td>
                    </tr>
                <?php } ?>
              </tbody>
        </table>
      </div>
    </div>
</div>
