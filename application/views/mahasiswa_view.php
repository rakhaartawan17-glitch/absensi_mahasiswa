<h1 class="h3 mb-4 text-gray-800">Data Mahasiswa</h1>

<a href="<?= site_url('mahasiswa/tambah') ?>" class="btn btn-primary mb-3">
  <i class="fas fa-plus"></i> Tambah Mahasiswa
</a>

<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($mahasiswa as $m): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $m->nim ?></td>
            <td><?= $m->nama ?></td>
            <td><?= $m->jurusan ?></td>
            <td><?= $m->kelas ?></td>
            <td>
              <a href="<?= site_url('mahasiswa/edit/' . $m->id_mahasiswa) ?>" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
              </a>
              <a href="<?= site_url('mahasiswa/hapus/' . $m->id_mahasiswa) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">
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

<?php $this->load->view('template/footer'); ?>
