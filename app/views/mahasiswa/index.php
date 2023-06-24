<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3 class="pb-3">Daftar Mahasiswa</h3>
        <?php if(isset($data['mhs'])) : ?>
          <?php foreach($data['mhs'] as $mhs) : ?>
            <ul>
            <li>Nama: <?= $mhs['nama']; ?></li>
              <li>NPM: <?= $mhs['npm']; ?></li>
              <li>Email: <?= $mhs['email']; ?></li>
              <li>Jurusan: <?= $mhs['jurusan']; ?></li>
            </ul>
          <?php endforeach; ?>
        <?php else : ?>
          <p>Tidak ada data mahasiswa.</p>
        <?php endif; ?>
    </div>
  </div>
</div>