<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title><?= lang('Auth.login') ?></title>
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
      <h5 class="card-title mb-4"><?= lang('Auth.login') ?></h5>

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

      <?php if (session('message') !== null) : ?>
        <div class="alert alert-success" role="alert"><?= session('message') ?></div>
      <?php endif ?>

      <form action="<?= url_to('login') ?>" method="post" novalidate>
        <?= csrf_field() ?>

        <!-- Email -->
        <div class="mb-3">
          <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
        </div>

        <!-- Password -->
        <div class="mb-3">
          <input type="password" class="form-control" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required />
        </div>

        <!-- Remember me -->
        <?php if (setting('Auth.sessionConfig')['allowRemembering']) : ?>
          <div class="form-check mb-3">
            <input type="checkbox" name="remember" class="form-check-input" id="remember" <?php if (old('remember')) : ?> checked<?php endif ?>>
            <label for="remember" class="form-check-label">
              <?= lang('Auth.rememberMe') ?>
            </label>
          </div>
        <?php endif; ?>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.login') ?></button>
        </div>
      </form>

      <?php if (setting('Auth.allowRegistration')) : ?>
        <div class="text-center mt-3">
          <p><?= lang('Auth.needAccount') ?> <a href="<?= url_to('register') ?>"><?= lang('Auth.register') ?></a></p>
        </div>
      <?php endif ?>

      <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
        <p class="text-center"><?= lang('Auth.forgotPassword') ?> <a href="<?= url_to('magic-link') ?>"><?= lang('Auth.useMagicLink') ?></a></p>
      <?php endif ?>

    </div>
  </div>
</div>
<?= $this->endSection() ?>
