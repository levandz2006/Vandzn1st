# Website Quản Lý Tour

Dự án PHP cơ bản mô phỏng cấu trúc MVC tối giản phục vụ học tập.

## Tổng quan cấu trúc

- `index.php`: điểm vào, định tuyến request bằng `match`.
- `config/config.php`: cấu hình chung và thông tin kết nối DB.
- `src/helpers/`: các hàm tiện ích (`render`, `asset`...).
- `src/models/`: các lớp đại diện dữ liệu ví dụ (`User`).
- `src/controllers/`: nghiệp vụ mẫu (`HomeController` với nhiều action).
- `views/`: giao diện tương ứng mỗi action (trang chủ, giỏ hàng, thanh toán...).
- `public/`: tài nguyên tĩnh (css/js/images).
- `.htaccess`: Dùng Rewrite URL Chuyển từ dạng "index.php?act=home" thành "/home"