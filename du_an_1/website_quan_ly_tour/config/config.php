<?php

// Định nghĩa các hằng số toàn cục dùng trong dự án (chỉ define nếu chưa được định nghĩa)
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__)); // Đường dẫn tuyệt đối tới thư mục gốc của dự án
}
if (!defined('BASE_URL')) {
    define('BASE_URL', '/du_an_1/website_quan_ly_tour/'); // URL cơ bản của dự án(Lưu ý cấp độ trong htdocs hoặc www)
}

// Cấu hình cơ bản cho kết nối CSDL
return [
    'db' => [
        'host' => 'localhost', // Host cơ sở dữ liệu
        'name' => 'website_ql_tour', // Tên cơ sở dữ liệu
        'user' => 'root', // Tên người dùng
        'pass' => '', // Mật khẩu
        'charset' => 'utf8mb4', // Mã hóa
    ],
];
