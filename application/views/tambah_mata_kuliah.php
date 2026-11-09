<h1 class="h3 mb-4 text-gray-800">Tambah Mata Kuliah</h1>

<div class="card shadow mb-4">
  <div class="card-body">
    <form action="<?= site_url('mata_kuliah/simpan') ?>" method="post">

      <div class="form-group mb-3">
        <label>Kode Mata Kuliah</label>
        <input type="text" name="kode_mk" class="form-control" required>
      </div>

      <div class="form-group mb-3">
        <label>Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" class="form-control" required>
      </div>

      <div class="form-group mb-4">
        <label>Jumlah Pertemuan</label>
        <input type="number" name="jumlah_pertemuan" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
      <a href="<?= site_url('mata_kuliah') ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>

    </form>
  </div>
</div>
