<?php
// Sử dụng layout auth và truyền nội dung vào
ob_start();
?>
<!--begin::Not Found Content-->
<div class="not-found-wrapper">
    <div class="not-found-card">
        <div class="not-found-header text-white">
            <a href="<?= BASE_URL ?>" class="text-white text-decoration-none">
                <div class="brand-icon">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <h1>
                    <strong>404 - Không tìm thấy</strong>
                </h1>
                <div class="subtitle">
                    Rất tiếc, trang bạn đang tìm kiếm không tồn tại
                </div>
            </a>
        </div>
        <div class="card-body">
            <div class="alert alert-warning welcome-alert" role="alert">
                <h4 class="alert-heading">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    Lỗi 404
                </h4>
                <p class="mb-3">
                    Trang bạn đang tìm kiếm không tồn tại hoặc đã bị xóa.
                    <br>
                    Vui lòng kiểm tra lại đường dẫn hoặc quay về trang chủ.
                </p>
            </div>

            <div class="text-center mt-4">
                <a href="<?= BASE_URL ?>" class="btn btn-welcome">
                    <i class="bi bi-house-door-fill me-2"></i>
                    Quay về trang chủ
                </a>
            </div>

            <div class="mt-4 text-center">
                <a href="<?= BASE_URL ?>login" class="text-decoration-none text-fpt-orange fw-semibold">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Đăng nhập vào hệ thống
                </a>
            </div>
        </div>
    </div>
</div>
<!--end::Not Found Content-->
<?php
$content = ob_get_clean();

// Hiển thị layout auth với nội dung
view('layouts.AuthLayout', [
    'title' => $title ?? 'Trang không tìm thấy - 404',
    'content' => $content,
]);
?>

