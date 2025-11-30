<?php
// Sử dụng layout auth và truyền nội dung vào
ob_start();
?>
<!--begin::Login Content-->
<div class="login-wrapper">
    <div class="col-12 col-md-8 col-lg-5 col-xl-4">
        <div class="card login-card shadow-lg border-0">
            <div class="login-header text-center text-white">
                <a href="<?= BASE_URL ?>" class="text-white text-decoration-none">
                    <div class="brand-icon mb-2">
                        <i class="bi bi-airplane-fill"></i>
                    </div>
                    <h2>
                        <strong>Quản Lý Tour FPOLY</strong>
                    </h2>
                </a>
                <div class="mt-2 fw-light fst-italic" style="font-size: 1rem;">
                    Hệ thống quản lý tour chuyên nghiệp
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center mb-4 fw-bold card-title-login">
                    Đăng nhập để tiếp tục
                </h4>
                <?php if (!empty($errors)): ?>
                <div class="alert alert-danger fade show" role="alert">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-exclamation-circle-fill me-2 fs-5"></i>
                        <strong>Lỗi đăng nhập</strong>
                    </div>
                    <ul class="mb-0 ps-3">
                        <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <form action="<?= BASE_URL ?>check-login" method="post" autocomplete="on" novalidate>
                    <input type="hidden" name="redirect" value="<?= $redirect ?? BASE_URL . 'home' ?>" />

                    <div class="mb-3">
                        <label for="loginEmail" class="form-label fw-semibold">
                            Email
                        </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email"
                                   class="form-control"
                                   id="loginEmail"
                                   name="email"
                                   value="<?= htmlspecialchars($email ?? '') ?>"
                                   placeholder="Nhập email"
                                   required
                                   autofocus />
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="loginPassword" class="form-label fw-semibold">
                            Mật khẩu
                        </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input type="password"
                                   class="form-control"
                                   id="loginPassword"
                                   name="password"
                                   placeholder="Nhập mật khẩu"
                                   required
                                   autocomplete="current-password"/>
                            <button type="button" class="btn btn-outline-secondary btn-sm" tabindex="-1" id="togglePassword" title="Hiện/ẩn mật khẩu">
                                <i class="bi bi-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="rememberMe" name="remember_me">
                            <label class="form-check-label" for="rememberMe">
                                Ghi nhớ tài khoản
                            </label>
                        </div>
                        <!-- <a href="#" class="small text-decoration-none text-primary fst-italic">Quên mật khẩu?</a> -->
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-login btn-lg">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Đăng nhập
                        </button>
                    </div>
                </form>
                <div class="login-divider"></div>
                <div class="text-center">
                    <a href="<?= BASE_URL ?>" class="text-decoration-none text-fpt-orange fw-semibold">
                        <i class="bi bi-arrow-left me-2"></i>
                        Quay về trang chủ
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Login Content-->
<?php
$content = ob_get_clean();

// Hiển thị layout auth với nội dung
view('layouts.AuthLayout', [
    'title' => $title ?? 'Đăng nhập',
    'content' => $content,
    'extraJs' => ['js/login.js'],
]);
?>