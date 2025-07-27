<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Home</title>
<style>
  /* Ganti font dan warna sederhana */
  body {
    font-family: Arial, sans-serif;
    color: #333;
    background-color: #f9f9f9;
  }
  h1.display-4 {
    color: #2c3e50;
    font-weight: normal;
  }
  h1.display-4 span {
    color: #27ae60;
  }
  p.lead {
    font-size: 1.1rem;
    color: #555;
  }
  a.btn-primary {
    background-color: #27ae60;
    border-color: #27ae60;
  }
  a.btn-primary:hover {
    background-color: #219150;
    border-color: #219150;
  }
  a.btn-outline-secondary {
    color: #27ae60;
    border-color: #27ae60;
  }
  a.btn-outline-secondary:hover {
    background-color: #27ae60;
    color: #fff;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold">Unsia<span>library</span></h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Temukan beragam buku inspiratif di Unsia Library, teman terpercaya bagi para pembaca dan pelajar yang ingin mengembangkan pengetahuan dan kreativitas tanpa batas</p>
    <div class="d-flex justify-content-center gap-3 mb-5 flex-wrap">
      <a href="<?= base_url('book'); ?>" class="btn btn-outline-secondary btn-lg px-4">Daftar buku</a>
      <a href="<?= base_url('login'); ?>" class="btn btn-primary btn-lg px-4">Login petugas</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
