<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Absensi</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= site_url('absensi/update/'.$absensi->id_absensi) ?>" method="post">

            <div class="form-group mb-3">
                <label>Mahasiswa</label>
                <input type="text" class="form-control" value="<?= $absensi->nama_mahasiswa ?>" disabled>
                <input type="hidden" name="id_mahasiswa" value="<?= $absensi->id_mahasiswa ?>">
            </div>

            <div class="form-group mb-3">
                <label>Mata Kuliah</label>
                <input type="text" class="form-control" value="<?= $absensi->nama_mk ?>" disabled>
                <input type="hidden" name="id_mk" value="<?= $absensi->id_mk ?>">
            </div>

            <div class="form-group mb-3">
                <label>Pertemuan Ke</label>
                <input type="text" class="form-control" value="<?= $absensi->pertemuan_ke ?>" disabled>
                <input type="hidden" name="pertemuan_ke" value="<?= $absensi->pertemuan_ke ?>">
            </div>

            <div class="form-group mb-4">
                <label>Status Kehadiran</label>
                <select name="status" class="form-control" required>
                    <option value="hadir" <?= $absensi->status == 'hadir' ? 'selected' : '' ?>>Hadir</option>
                    <option value="tidak" <?= $absensi->status == 'tidak' ? 'selected' : '' ?>>Tidak</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            <a href="<?= site_url('absensi') ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>

        </form>
    </div>
</div>

</div>

