<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login - Sistem Absensi</title>
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>
<body class="bg-gradient-primary">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-8">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-5">
            <div class="text-center mb-4">
              <h1 class="h4 text-gray-900">Login Sistem Absensi</h1>
            </div>

            <?php if ($this->session->flashdata('error')): ?>
              <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
            <?php endif; ?>

            <form action="<?= site_url('auth/login') ?>" method="post">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
