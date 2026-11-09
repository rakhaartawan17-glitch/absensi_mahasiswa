<h1 class="h3 mb-4 text-gray-800">Rekap Kehadiran Mahasiswa</h1>

<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>Jumlah Pertemuan</th>
            <th>Total Hadir</th>
            <th>Total Tidak Hadir</th>
            <th>Persentase Kehadiran</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($rekap as $r): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $r->nim ?></td>
            <td><?= $r->nama_mahasiswa ?></td>
            <td><?= $r->kode_mk ?></td>
            <td><?= $r->nama_mk ?></td>
            <td><?= $r->jumlah_pertemuan ?></td>
            <td><?= $r->total_hadir ?></td>
            <td><?= $r->total_tidak ?></td>
            <td>
              <?php 
                $persen = $r->persentase_kehadiran;
                $warna = ($persen >= 80) ? 'success' : 'danger';
              ?>
              <span class="badge badge-<?= $warna ?>">
                <?= number_format($persen, 2) ?>%
              </span>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
