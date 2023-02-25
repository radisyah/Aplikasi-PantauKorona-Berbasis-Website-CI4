<div class="col-sm-12">
  <div id="map" style="height: 650px;"></div>
</div>

<script>
  var map = L.map('map').setView([31.705205, 20.436997], 2);

  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

   <?php foreach ($pemetaanGlob['data'] as $key => $value) { ?>
    var marker = L.marker([<?= $value['lat'] ?>, <?= $value['long'] ?>]).addTo(map).
    bindPopup("Negara       : <?= $value['name']?>").openPopup();
  <?php } ?>

 
  
</script>



