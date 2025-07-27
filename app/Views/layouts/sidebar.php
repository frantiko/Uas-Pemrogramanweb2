<?php

/**
 * List of sidebar navigations
 */
$sidebarNavs =
  [
    'Home',
    [
      'name' => 'Dashboard',
      'link' => '/admin/dashboard',
      'icon' => 'ti ti-layout-dashboard'
    ],
    'Transaksi',
    [
      'name' => 'Peminjaman',
      'link' => '/admin/loans',
      'icon' => 'ti ti-arrows-exchange'
    ],
    [
      'name' => 'Pengembalian',
      'link' => '/admin/returns',
      'icon' => 'ti ti-check'
    ],
    [
      'name' => 'Denda',
      'link' => '/admin/fines',
      'icon' => 'ti ti-report-money'
    ],
    'Master',
    [
      'name' => 'Anggota',
      'link' => '/admin/members',
      'icon' => 'ti ti-user'
    ],
    [
      'name' => 'Buku',
      'link' => '/admin/books',
      'icon' => 'ti ti-book'
    ],
    [
      'name' => 'Kategori',
      'link' => '/admin/categories',
      'icon' => 'ti ti-category-2'
    ],
    [
      'name' => 'Rak',
      'link' => '/admin/racks',
      'icon' => 'ti ti-columns'
    ],
  ];

if (auth()->user()->inGroup('superadmin') ?? false) {
  $sidebarNavs = array_merge(
    $sidebarNavs,
    [
      'Manajemen Akun',
      [
        'name' => 'Admin',
        'link' => '/admin/users',
        'icon' => 'ti ti-user-cog'
      ]
    ]
  );
}
?>

<!-- Sidebar Start -->
<aside class="left-sidebar" style="background-color: #002244; color: #fff;">
  <div>
    <!-- Brand -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <div class="pt-4 mx-auto">
        <a href="<?= base_url(); ?>" style="color: #fff; text-decoration: none;">
          <h2>
            <span style="color: white;">Unsia</span>
            <span style="color: #198754;">Library</span>
          </h2>
        </a>
      </div>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8" style="color: #fff;"></i>
      </div>
    </div>

    <!-- Sidebar navigation -->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <?php foreach ($sidebarNavs as $nav) : ?>
          <?php if (gettype($nav) === 'string') : ?>
            <li class="nav-small-cap" style="color: #00ccff;">
              <i class="ti ti-dots nav-small-cap-icon fs-4" style="color: #00ccff;"></i>
              <span class="hide-menu"><?= $nav; ?></span>
            </li>
          <?php else : ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url($nav['link']) ?>" aria-expanded="false" style="color: #fff;">
                <span>
                  <i class="<?= $nav['icon']; ?>" style="color: #00ccff;"></i>
                </span>
                <span class="hide-menu"><?= $nav['name']; ?></span>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</aside>
