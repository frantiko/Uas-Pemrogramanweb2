<!--  Header Start -->
<style>
  @media only screen and (max-width: 768px) {
    #navBtn {
      display: none;
    }
  }
</style>

<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)" style="color: #002244;">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>

    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end gap-2" id="headerCollapse">

        <li class="nav-item" id="navBtn">
          <a href="<?= base_url('admin/loans/new/members/search'); ?>" target="_blank" class="btn" style="background-color: #198754; color: #fff; white-space: nowrap;">
            Ajukan peminjaman
          </a>
        </li>

        <li class="nav-item" id="navBtn">
          <a href="<?= base_url('admin/returns/new/search'); ?>" class="btn btn-outline-primary text-nowrap" style="color: #198754; border-color: #198754;">
            Pengembalian buku
          </a>
        </li>

        <li class="nav-item" id="navBtn">
          <a href="<?= base_url('admin/fines/returns/search'); ?>" class="btn btn-outline-warning text-nowrap">
            Bayar denda
          </a>
        </li>

        <?php if (auth()->user()->inGroup('superadmin')) : ?>
          <li class="nav-item" id="navBtn">
            <a href="<?= base_url('admin/fines/settings'); ?>" class="btn btn-outline-danger text-nowrap">
              Pengaturan Denda
            </a>
          </li>
        <?php endif; ?>

        <li class="nav-item dropdown">
          <a class="nav-link nav-icon-hover position-relative" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false" style="color: #002244;">
            <img alt="" width="35" height="35" class="rounded-circle border border-success" style="background-color: white;">
            <i class="ti ti-user position-absolute top-50 start-50 translate-middle" style="color: #198754;"></i>
          </a>

          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" style="min-width: 300px;" aria-labelledby="drop2">
            <div class="message-body">
              <div class="mx-3 mt-2">
                <h5>Profil</h5>
                <span>username: <b><?= auth()->user()->username; ?></b></span><br>
                <span>email: <b><?= auth()->user()->email; ?></b></span><br>
                <span>level: </span>
                <?php
                $userGroup = auth()->user()->getGroups()[0];
                ?>
                <?php if ($userGroup === 'superadmin') : ?>
                  <span class="badge bg-success rounded-3 fw-semibold text-black"><?= $userGroup; ?></span>
                <?php elseif ($userGroup === 'admin') : ?>
                  <span class="badge bg-primary rounded-3 fw-semibold"><?= $userGroup; ?></span>
                <?php else : ?>
                  <span class="badge bg-dark rounded-3 fw-semibold"><?= $userGroup; ?></span>
                <?php endif; ?>
              </div>
              <a href="<?= base_url('logout'); ?>" class="btn btn-outline-success mx-3 mt-2 d-block">Logout</a>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </nav>
</header>
<!--  Header End -->
