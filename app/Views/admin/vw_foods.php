<?= $this->extend('admin/vw_template'); ?>


<?= $this->section('content'); ?>
<div class="container">
  <h2 class="mb-3">Makanan dan Minuman</h2>
  <a href="/admin/tambah-makanan" class="btn btn-primary mb-3">Tambah Menu</a>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr class="text-center">
            <th>Gambar</th>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row"><img src="/img/makanan/pizza.png" alt="" width="200px"></td>
            <td class="text-center">Pizza</td>
            <td>50.000</td>
            <td><a href="" class="btn btn-warning">Edit</a></td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>