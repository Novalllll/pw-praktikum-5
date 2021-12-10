<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class= "container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Device</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Brand</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="/img/monitor.jpg" alt="" class="ukuran"></td>
      <td>Monitor</td>
      <td>Asus</td>
      <td>10</td>
      <td>On</td>
      <td>
          <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="/img/speaker.jpg" alt="" class="ukuran"></td>
      <td>Speaker</td>
      <td>Harman Kardon</td>
      <td>10</td>
      <td>On</td>
      <td>
          <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="/img/cpu.jpg" alt="" class="ukuran"></td>
      <td>CPU</td>
      <td>Armageddon</td>
      <td>10</td>
      <td>On</td>
      <td>
          <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><img src="/img/mouse.jpg" alt="" class="ukuran"></td>
      <td>Mouse</td>
      <td>Steelseries</td>
      <td>10</td>
      <td>On</td>
      <td>
          <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><img src="/img/headset.png" alt="" width="130"></td>
      <td>Headset</td>
      <td>Logitech</td>
      <td>10</td>
      <td>On</td>
      <td>
          <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>

  </tbody>
</table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
    