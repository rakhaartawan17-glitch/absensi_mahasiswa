<h1 class="h3 mb-4 text-gray-800">Data Mata Kuliah</h1>

<a href="<?= site_url('mata_kuliah/tambah') ?>" class="btn btn-primary mb-3">
  <i class="fas fa-plus"></i> Tambah Mata Kuliah
</a>

<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Mata Kuliah</th>
            <th>Jumlah Pertemuan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($mata_kuliah as $mk): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $mk->kode_mk ?></td>
            <td><?= $mk->nama_mk ?></td>
            <td><?= $mk->jumlah_pertemuan ?></td>
            <td>
              <a href="<?= site_url('mata_kuliah/edit/' . $mk->id_mk) ?>" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
              </a>
              <a href="<?= site_url('mata_kuliah/hapus/' . $mk->id_mk) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
