<h1 class="h3 mb-4 text-gray-800">Tambah Absensi</h1>

<div class="card shadow mb-4">
  <div class="card-body">
    <form action="<?= site_url('absensi/simpan') ?>" method="post" id="formAbsensi">
      <div class="form-group">
        <label for="id_mahasiswa">Mahasiswa</label>
        <select name="id_mahasiswa" id="id_mahasiswa" class="form-control" required>
          <option value="">-- Pilih Mahasiswa --</option>
          <?php foreach ($mahasiswa as $m): ?>
            <option value="<?= $m->id_mahasiswa ?>"><?= $m->nama ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label for="id_mk">Mata Kuliah</label>
        <select name="id_mk" id="id_mk" class="form-control" required onchange="updatePertemuan()">
          <option value="">-- Pilih Mata Kuliah --</option>
          <?php foreach ($mata_kuliah as $mk): ?>
            <option value="<?= $mk->id_mk ?>"><?= $mk->nama_mk ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <label>Pilih Status Pertemuan:</label>
        <div id="pertemuanContainer" style="max-height: 400px; overflow-y: auto; border: 1px solid #ddd; padding: 10px; border-radius: 4px;">
          <?php 
          for ($i = 1; $i <= 16; $i++): ?>
            <div class="mb-3 pb-2" style="border-bottom: 1px solid #eee;">
              <label style="font-weight: bold; margin-bottom: 8px; display: block;">Pertemuan <?= $i ?></label>
              <div class="form-check">
                <input class="form-check-input pertemuan-radio" type="radio" name="status_pertemuan[<?= $i ?>]" value="hadir" id="hadir_<?= $i ?>" disabled>
                <label class="form-check-label" for="hadir_<?= $i ?>">
                  <span class="badge badge-success">Hadir</span>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input pertemuan-radio" type="radio" name="status_pertemuan[<?= $i ?>]" value="tidak" id="tidak_<?= $i ?>" disabled>
                <label class="form-check-label" for="tidak_<?= $i ?>">
                  <span class="badge badge-danger">Tidak</span>
                </label>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>

      <button type="submit" class="btn btn-primary" id="btnSimpan">
        <i class="fas fa-save"></i> Simpan Absensi
      </button>
      <a href="<?= site_url('absensi') ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

<script>
function updatePertemuan() {
  var id_mk = document.getElementById('id_mk').value;
  var radios = document.querySelectorAll('#pertemuanContainer input[type="radio"]');
  
  if (id_mk) {
    radios.forEach(function(radio) {
      radio.disabled = false;
    });
  } else {
    radios.forEach(function(radio) {
      radio.checked = false;
      radio.disabled = true;
    });
  }
}

document.getElementById('formAbsensi').addEventListener('submit', function(e) {
  var id_mahasiswa = document.getElementById('id_mahasiswa').value;
  var id_mk = document.getElementById('id_mk').value;
  var radios = document.querySelectorAll('#pertemuanContainer input[type="radio"]:checked');
  
  if (!id_mahasiswa) {
    alert('Pilih mahasiswa terlebih dahulu');
    e.preventDefault();
    return;
  }
  
  if (!id_mk) {
    alert('Pilih mata kuliah terlebih dahulu');
    e.preventDefault();
    return;
  }
  
  if (radios.length === 0) {
    alert('Pilih minimal satu pertemuan dengan status hadir atau tidak');
    e.preventDefault();
  }
});

// Initialize on page load
updatePertemuan();
</script>
