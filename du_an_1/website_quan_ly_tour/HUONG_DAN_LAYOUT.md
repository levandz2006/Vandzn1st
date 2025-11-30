# Hướng dẫn sử dụng Layout và Content

## Cơ chế hoạt động

### 1. Output Buffering (ob_start/ob_get_clean)
    - Output Buffering: Dùng ob_start() để "bắt" tất cả nội dung HTML/PHP (echo, print...) vào một biến, không xuất ra màn hình ngay.
    - Sau đó dùng ob_get_clean() để lấy toàn bộ nội dung đó ra, gán vào biến $content.

### 2. Hàm view() xử lý như thế nào?

```php
function view(string $view, array $data = []): void
{
    $file = view_path($view);  // Lấy đường dẫn file layout.php
    
    extract($data, EXTR_OVERWRITE);  
    // extract() chuyển mảng thành biến:
    // ['content' => '...', 'title' => '...'] 
    // → $content = '...', $title = '...'
    
    include $file;  // Include layout.php (lúc này $content đã là biến)
}
```

### 3. Layout.php nhận và hiển thị

```php
<!-- Trong layout.php -->
<div class="app-content">
    <div class="container-fluid">
        <?php if (isset($content)): ?>
            <?= $content ?>  <!-- Hiển thị nội dung từ home.php -->
        <?php endif; ?>
    </div>
</div>
```

## Ví dụ đơn giản

### Tạo view mới (ví dụ: about.php)

```php
<?php
// Bắt đầu capture nội dung
ob_start();
?>

<h1>Giới thiệu</h1>
<p>Đây là trang giới thiệu về hệ thống.</p>

<?php
// Lấy nội dung đã capture
$content = ob_get_clean();

// Truyền vào layout
view('layout', [
    'title' => 'Giới thiệu',
    'pageTitle' => 'Giới thiệu',
    'content' => $content,
    'breadcrumb' => [
        ['label' => 'Trang chủ', 'url' => BASE_URL . '?act=home'],
        ['label' => 'Giới thiệu', 'url' => BASE_URL . '?act=about', 'active' => true],
    ],
]);
?>
```

## Lợi ích của cách làm này

1. **Tái sử dụng layout**: Chỉ cần tạo layout một lần, dùng cho nhiều trang
2. **Dễ bảo trì**: Sửa header/footer ở một nơi, tất cả trang đều cập nhật
3. **Tách biệt logic**: Nội dung trang tách khỏi cấu trúc layout
4. **Linh hoạt**: Có thể truyền thêm dữ liệu vào layout (title, breadcrumb, etc.)

## Lưu ý

- `ob_start()` và `ob_get_clean()` phải đi đôi với nhau
- Nội dung giữa `ob_start()` và `ob_get_clean()` sẽ KHÔNG hiển thị trực tiếp
- Chỉ khi gọi `view('layout', ['content' => $content])` thì nội dung mới được hiển thị

