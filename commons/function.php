<?php

// Kết nối CSDL qua PDO
function connectDB()
{
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}

function uploadFile($file, $folderSave)
{
    $file_upload = $file;
    $pathStorage = $folderSave . rand(10000, 99999) . $file_upload['name'];

    $tmp_file = $file_upload['tmp_name'];
    $pathSave = PATH_ROOT . $pathStorage; // Đường dãn tuyệt đối của file

    if (move_uploaded_file($tmp_file, $pathSave)) {
        return $pathStorage;
    }
    return null;
}

function deleteFile($file)
{
    $pathDelete = PATH_ROOT . $file;
    if (file_exists($pathDelete)) {
        unlink($pathDelete); // Hàm unlink dùng để xóa file
    }
}

// $dir : nơi lưu file
// $file : là cái file muốn upload
// $url : đường dẫn file sau khi upload => lưu vào DB
// public function uploadImage($dir, $file, $url = null)
function uploadImage($dir, $file, $url = null)
{
    if (isset($file)) {
        $fileTmp = $file['tmp_name'];
        $fileName = basename($file['name']); // anh1.jpg
        $ext = pathinfo($fileName, PATHINFO_EXTENSION); // jpg
        $newFileName = uniqid() . '.' . $ext; // 123456789.jpg
        $uploadPath =  __DIR__ . '/../' . $dir . "/" . $newFileName;
        if (move_uploaded_file($fileTmp, $uploadPath)) {
            if ($url != null) {
                if (file_exists($url)) {
                    unlink($url); // Xóa ảnh cũ khi cập nhật
                }
            }
            $url = $dir . "/" . $newFileName; // Tên đường dẫn
        }
    }
    return $url;
}
