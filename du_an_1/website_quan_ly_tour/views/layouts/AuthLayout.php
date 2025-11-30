<!doctype html>
<html lang="vi">
  <!--begin::Head-->
  <head>
    <meta charset="utf-8" />
    <title><?= $title ?? 'Website Quản Lý Tour' ?></title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="<?= $title ?? 'Website Quản Lý Tour' ?>" />
    <meta name="author" content="FPOLY HN" />
    <meta name="description" content="Website Quản Lý Tour Du Lịch FPOLY HN" />
    <meta name="keywords" content="Website Quản Lý Tour Du Lịch FPOLY HN" />
    <!--end::Primary Meta Tags-->
    <!--begin::Bootstrap 5 CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!--end::Bootstrap 5 CSS-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Auth CSS-->
    <link rel="stylesheet" href="<?= asset('css/auth.css') ?>">
    <!--end::Auth CSS-->
    <?php if (isset($extraCss)): ?>
      <?php foreach ($extraCss as $css): ?>
        <link rel="stylesheet" href="<?= asset($css) ?>">
      <?php endforeach; ?>
    <?php endif; ?>
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body>
    <?php if (isset($content)): ?>
      <?= $content ?>
    <?php endif; ?>
    <!--begin::Bootstrap 5 JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!--end::Bootstrap 5 JS-->
    <?php if (isset($extraJs)): ?>
      <?php foreach ($extraJs as $js): ?>
        <script src="<?= asset($js) ?>"></script>
      <?php endforeach; ?>
    <?php endif; ?>
  </body>
  <!--end::Body-->
</html>

