<?php

// Hàm kết nối tới cơ sở dữ liệu MySQL
// Sử dụng cấu hình từ config/config.php
// Trả về đối tượng PDO nếu kết nối thành công, null nếu thất bại
function getDB()
{
    static $pdo = null;
    static $dbConfig = null;

    // Nếu đã kết nối rồi thì trả về kết nối cũ (singleton pattern)
    if ($pdo !== null) {
        return $pdo;
    }

    // Lấy cấu hình database (chỉ load một lần)
    if ($dbConfig === null) {
        $config = require BASE_PATH . '/config/config.php';
        $dbConfig = $config['db'];
    }

    try {
        // Tạo chuỗi DSN (Data Source Name) cho PDO
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=%s',
            $dbConfig['host'],
            $dbConfig['name'],
            $dbConfig['charset']
        );

        // Tạo kết nối PDO với các tùy chọn
        $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Báo lỗi khi có exception
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mặc định trả về mảng kết hợp
            PDO::ATTR_EMULATE_PREPARES => false, // Sử dụng prepared statements thật
        ]);

        return $pdo;
    } catch (PDOException $e) {
        // Ghi log lỗi (trong môi trường production nên log vào file)
        error_log('Database connection failed: ' . $e->getMessage());
        return null;
    }
}

