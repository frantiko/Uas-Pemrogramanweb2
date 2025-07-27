<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title><?= lang('Auth.register') ?></title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
  }
  .card {
    border-radius: 10px;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
  }
  h5.card-title {
    color: #2c3e50;
    font-weight: normal;
  }
  input.form-control {
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 1rem;
  }
  input.form-control:focus {
    border-color: #27ae60;
    box-shadow: 0 0 5px rgba(39,174,96,0.5);
  }
  .btn-primary {
    background-color: #27ae60;
    border-color: #27ae60;
    font-weight: bold;
  }
  .btn-primary:hover {
    background-color: #219150;
    border-color: #219150;
  }
  a {
    color: #27ae60;
    text-decoration: none;
  }
  a:hover {
    text-decoration: underline;
    color: #219150;
  }
  .btn-outline-primary {
    color: #27ae60;
    border-color: #27ae60;
  }
  .btn-outline-primary:hover {
    background-color: #27ae60;
    color: #fff;
  }
  .form-check-label {
    color: #555;
    font-size: 0.95rem;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('back'); ?>
<a href="<?= base_url(); ?>" class="btn btn-outline-primary m-3 position-absolute">
  <i class="ti ti-arrow-left"></i>
  Kembali
</a>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center p-5" style="min-height: 80vh; align-items: center;">
  <div class="card col-12 col-md-5 shadow-sm p-4">
    <div class="card-body">
      <h5 class="card-title mb-4"><?= lang('Auth.register') ?></h5>

      <?php if (session('error') !== null) : ?>
        <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
      <?php elseif (session('errors') !== null) : ?>
        <div class="alert alert-danger" role="alert">
          <?php if (is_array(session('errors'))) : ?>
            <?php foreach (session('errors') as $error) : ?>
              <?= $error ?><br>
            <?php endforeach ?>
          <?php else : ?>
            <?= session('errors') ?>
          <?php endif ?>
        </div>
      <?php endif ?>

      <form action="<?= base_url('admin/users') ?>" method="post">
        <?= csrf_field() ?>

        <!-- Email -->
        <div class="mb-3">
          <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="Email" value="<?= old('email') ?>" required />
        </div>

        <!-- Username -->
        <div class="mb-3">
          <input type="text" class="form-control" name="username" inputmode="text" autocomplete="username" placeholder="Username" value="<?= old('username') ?>" required />
        </div>

        <!-- Password -->
        <div class="mb-3">
          <input type="password" class="form-control" name="password" inputmode="text" autocomplete="new-password" placeholder="Password" required />
        </div>

        <!-- Password (Confirm) -->
        <div class="mb-4">
          <input type="password" class="form-control" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="Konfirmasi Password" required />
        </div>

        <div class="d-grid col-12 mx-auto m-3">
          <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
        </div>
        
        <p class="text-center"><?= lang('Auth.haveAccount') ?> <a href="<?= url_to('login') ?>">Masuk</a></p>

      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
