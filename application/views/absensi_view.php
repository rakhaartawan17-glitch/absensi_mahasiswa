<h1 class="h3 mb-4 text-gray-800">Data Absensi</h1>

<a href="<?= site_url('absensi/tambah') ?>" class="btn btn-primary mb-3">
  <i class="fas fa-plus"></i> Tambah Absensi
</a>

<div class="card shadow mb-4">
  <div class="card-body">
    <?php
    $grouped_absensi = [];
    foreach ($absensi as $a) {
      if (!isset($grouped_absensi[$a->nama_mahasiswa])) {
        $grouped_absensi[$a->nama_mahasiswa] = [];
      }
      $grouped_absensi[$a->nama_mahasiswa][] = $a;
    }
    ?>
    
    <div class="accordion" id="absensiAccordion">
      <?php $accordion_index = 0; foreach ($grouped_absensi as $nama_mahasiswa => $data_mahasiswa): $accordion_index++; ?>
      <div class="card mb-2">
        <div class="card-header" id="headingAccordion<?= $accordion_index ?>" style="cursor: pointer; background-color: #f8f9fa;">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseAccordion<?= $accordion_index ?>" aria-expanded="false" aria-controls="collapseAccordion<?= $accordion_index ?>">
            <strong><?= $nama_mahasiswa ?></strong> <span class="badge badge-info ml-2"><?= count($data_mahasiswa) ?> entri</span>
          </button>
        </div>

        <div id="collapseAccordion<?= $accordion_index ?>" class="collapse" aria-labelledby="headingAccordion<?= $accordion_index ?>" data-parent="#absensiAccordion">
          <div class="card-body p-0">
            <table class="table table-bordered table-striped mb-0">
              <thead style="background-color: #f8f9fa;">
                <tr>
                  <th>No</th>
                  <th>Mata Kuliah</th>
                  <th>Pertemuan Ke</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach ($data_mahasiswa as $a): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $a->nama_mk ?></td>
                  <td><?= $a->pertemuan_ke ?></td>
                  <td>
                    <?php if ($a->status == 'hadir'): ?>
                      <span class="badge badge-success">Hadir</span>
                    <?php else: ?>
                      <span class="badge badge-danger">Tidak</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <a href="<?= site_url('absensi/edit/' . $a->id_absensi) ?>" class="btn btn-warning btn-sm" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="<?= site_url('absensi/hapus/' . $a->id_absensi) ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin hapus?')">
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
      <?php endforeach; ?>
    </div>
  </div>
</div>
