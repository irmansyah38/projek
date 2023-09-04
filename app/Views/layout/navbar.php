<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
  <a href="/" class="navbar-brand"><b>Curug Cikoneng</b></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <div class="navbar-nav">
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">E-Tiket</a>
        <div class="dropdown-menu p-3 rounded" style="width: 7rem;">
          <div class="mb-3">
            <form action="/proses" method="post">
              <div class="form-group">
                <label for="jumlah">Jumlah orang</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" aria-describedby="helpId" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <hr>
          <div>
            <div>
              <label for="">5 orang</label>
              <a href="" class="btn btn-primary">download</a>
            </div>
          </div>

        </div>
      </div>
      <a href="#footer" class="nav-item nav-link">Daftar Transaksi</a>
      <a href="/makanan-minuman" class="nav-item nav-link">Makanan & Minuman</a>
      <a href="#footer" class="nav-item nav-link">Contact</a>
    </div>
    <div class="navbar-nav ml-auto ">

      <?php if (logged_in()) : ?>
        <?php $user = json_decode(json_encode(user()), true); ?>
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $user['username']; ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </div>
      <?php else : ?>
        <a href="/login" class="mr-2 border border-1">Login</a>
        <a href="/register" class="btn btn-primary">Sign Up</a>
      <?php endif; ?>
    </div>
  </div>
</nav>