<?php
// Sử dụng layout auth và truyền nội dung vào
ob_start();
?>
<!--begin::Main Content-->
<div class="welcome-wrapper">
  <div class="welcome-card">
    <div class="welcome-header text-white">
      <a href="<?= BASE_URL ?>" class="text-white text-decoration-none">
        <div class="brand-icon">
          <i class="bi bi-airplane-fill"></i>
        </div>
        <h1>
          <strong>Chào mừng đến với Website Quản Lý Tour</strong>
        </h1>
        <div class="subtitle">
          Hệ thống quản lý tour du lịch chuyên nghiệp của FPOLY HN
        </div>
      </a>
    </div>
    <div class="card-body">
      <div class="alert alert-info welcome-alert" role="alert">
        <h4 class="alert-heading">
          <i class="bi bi-info-circle-fill me-2"></i>
          Chào mừng!
        </h4>
        <p class="mb-3">
          Đây là hệ thống quản lý tour du lịch của FPOLY HN. 
          Để sử dụng đầy đủ chức năng, vui lòng đăng nhập vào hệ thống.
        </p>
        <div class="d-grid">
          <a href="<?= BASE_URL ?>login" class="btn btn-welcome">
            <i class="bi bi-box-arrow-in-right me-2"></i>
            Đăng nhập ngay
          </a>
        </div>
      </div>

      <div class="row mt-4 g-3">
        <div class="col-md-4 mb-3">
          <div class="card feature-card">
            <div class="card-body text-center">
              <i class="bi bi-airplane-engines feature-icon text-fpt-orange"></i>
              <h5 class="card-title">Quản lý Tour</h5>
              <p class="card-text">Quản lý các tour du lịch một cách hiệu quả và chuyên nghiệp</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card feature-card">
            <div class="card-body text-center">
              <i class="bi bi-people feature-icon text-fpt-orange"></i>
              <h5 class="card-title">Quản lý Khách hàng</h5>
              <p class="card-text">Theo dõi thông tin khách hàng đặt tour một cách chi tiết</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card feature-card">
            <div class="card-body text-center">
              <i class="bi bi-graph-up feature-icon text-fpt-orange"></i>
              <h5 class="card-title">Báo cáo & Thống kê</h5>
              <p class="card-text">Xem báo cáo và thống kê doanh thu một cách trực quan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::Main Content-->
<?php
$content = ob_get_clean();
// Hiển thị layout auth với nội dung
view('layouts.AuthLayout', [
    'title' => $title ?? 'Website Quản Lý Tour Du Lịch',
    'content' => $content,
]);
?>

