<div class="col-sm-12">
  <div id="map" style="height: 650px;"></div>
</div>

<script>
  var map = L.map('map').setView([-1.973104, 117.668911], 5);

  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

  <?php foreach ($pemetaanProv['list_data'] as $key => $value) { ?>
    var marker = L.marker([<?= $value['lokasi']['lat'] ?>, <?= $value['lokasi']['lon'] ?>]).addTo(map).
    bindPopup("Provinsi       : <?= $value['key']?> <br>" +
              "Positif        : <?= number_format($value['jumlah_kasus'],0)?> <br>" +
              "Sembuh         : <?= number_format($value['jumlah_sembuh'],0)?> <br>" +
              "Meninggal      : <?= number_format($value['jumlah_meninggal'],0)?> <br>" +
              "Jumlah Dirawat : <?= number_format($value['jumlah_dirawat'],0)?> <br>"
    ).openPopup();
  <?php } ?>
  
  
</script>



