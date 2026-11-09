<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Mata Kuliah</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form action="<?= site_url('mata_kuliah/update') ?>" method="POST">

                <input type="hidden" name="id_mk" value="<?= $mk->id_mk ?>">

                <div class="form-group">
                    <label for="kode_mk">Kode Mata Kuliah</label>
                    <input type="text" class="form-control" id="kode_mk" name="kode_mk" 
                           value="<?= $mk->kode_mk ?>" required>
                </div>

                <div class="form-group">
                    <label for="nama_mk">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" id="nama_mk" name="nama_mk" 
                           value="<?= $mk->nama_mk ?>" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_pertemuan">Jumlah Pertemuan</label>
                    <input type="number" class="form-control" id="jumlah_pertemuan" 
                           name="jumlah_pertemuan" value="<?= $mk->jumlah_pertemuan ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>

                <a href="<?= site_url('mata_kuliah') ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>

            </form>

        </div>
    </div>

</div>