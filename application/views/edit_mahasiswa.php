<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Data Mahasiswa</h1>

    <div class="card shadow col-lg-8 p-4">
        <form action="<?= site_url('mahasiswa/update') ?>" method="post">

               <input type="hidden" name="id_mahasiswa" value="<?= $mahasiswa->id_mahasiswa ?>">

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= $mahasiswa->nim ?>" required>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $mahasiswa->nama ?>" required>
            </div>

            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?= $mahasiswa->jurusan ?>" required>
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" value="<?= $mahasiswa->kelas ?>" required>
            </div>

            <button class="btn btn-primary mt-3">
                <i class="fas fa-save"></i> Simpan Perubahan
            </button>

            <a href="<?= site_url('mahasiswa') ?>" class="btn btn-secondary mt-3">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>

        </form>
    </div>

</div>
