<h1 class="h3 mb-4 text-gray-800">Tambah Mahasiswa</h1>

<div class="card shadow mb-4">
  <div class="card-body">
    <form action="<?= site_url('mahasiswa/simpan') ?>" method="post">
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" name="nim" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" class="form-control" required>
      </div>
      
      <div class="mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        <a href="<?= site_url('mahasiswa') ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
      </div>
    </form>
  </div>
</div>
