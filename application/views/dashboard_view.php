<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
              Total Mahasiswa
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?= $jumlah_siswa ?> Mahasiswa
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Total Mata Kuliah
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?= $jumlah_matkul ?> Mata Kuliah
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-book fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
