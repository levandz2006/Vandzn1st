<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
      </li>
    </ul>
    <!--end::Start Navbar Links-->
    <!--begin::End Navbar Links-->
    <ul class="navbar-nav ms-auto">
      <!--begin::Notifications Dropdown Menu-->
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#">
          <i class="bi bi-bell-fill"></i>
          <span class="navbar-badge badge text-bg-warning">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <span class="dropdown-item dropdown-header">15 Thông báo</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-envelope me-2"></i> 4 tin nhắn mới
            <span class="float-end text-secondary fs-7">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-people-fill me-2"></i> 8 Liên hệ mới
            <span class="float-end text-secondary fs-7">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-file-earmark-fill me-2"></i> 3 báo cáo mới
            <span class="float-end text-secondary fs-7">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"> Xem tất cả thông báo </a>
        </div>
      </li>
      <!--end::Notifications Dropdown Menu-->
      <!--begin::Fullscreen Toggle-->
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
        </a>
      </li>
      <!--end::Fullscreen Toggle-->
      <!--begin::User Menu Dropdown-->
      <?php if (isLoggedIn()): ?>
        <?php $currentUser = getCurrentUser(); ?>
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img
              src="<?= asset('dist/assets/img/user2-160x160.jpg') ?>"
              class="user-image rounded-circle shadow"
              alt="User Image"
            />
            <span class="d-none d-md-inline"><?= $currentUser->name ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <!--begin::User Image-->
            <li class="user-header text-bg-primary">
              <img
                src="<?= asset('dist/assets/img/user2-160x160.jpg') ?>"
                class="rounded-circle shadow"
                alt="User Image"
              />
              <p>
                <?= $currentUser->name ?> - <?= $currentUser->isAdmin() ? 'Quản trị viên' : 'Hướng dẫn viên' ?>
                <small><?= date('M. Y') ?></small>
              </p>
            </li>
            <!--end::User Image-->
            <!--begin::Menu Body-->
            
            <!--end::Menu Body-->
            <!--begin::Menu Footer-->
            <li class="user-footer">
              <a href="#" class="btn btn-default btn-flat">Tài khoản</a>
              <a href="<?= BASE_URL . 'logout' ?>" class="btn btn-default btn-flat float-end">Đăng xuất</a>
            </li>
            <!--end::Menu Footer-->
          </ul>
        </li>
      <?php endif; ?>
      <!--end::User Menu Dropdown-->
    </ul>
    <!--end::End Navbar Links-->
  </div>
  <!--end::Container-->
</nav>
<!--end::Header-->

