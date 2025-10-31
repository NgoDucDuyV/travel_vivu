<?php
// session_start();
// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS
$_SESSION['BASE_URL'] = 'http://localhost/travel_vivu/';
define('BASE_URL', 'http://localhost/travel_vivu/');
define('Views_Admin', './views/Admin/');
define('Views_Client', './views/Client/');
define('Views_Router', './router/');


define('CssAdmin', BASE_URL . '/assets/css/CssAdmin/');
define('CSS', BASE_URL . '/assets/css/');
define('CSSDuyDumStomaty', BASE_URL . '/assets/css/CssDuyDumStomaty/');

define('Js_Admin', BASE_URL . '/assets/js/Js_Admin/');
define('Js_Client', BASE_URL . '/assets/js/Js_Client/');


define('IMAGECHUNG', BASE_URL . '/assets/upload/image_chung/');
define('Image_Admin', BASE_URL . '/assets/upload/image_Admin/');
define('Image_Chung', BASE_URL . '/assets/upload/image_chung/');
define('Image_Touar', BASE_URL . '/assets/upload/image_Tuar/');
define('Image_User', BASE_URL . '/assets/upload/image_User');
define('Image_UserAdmin', BASE_URL . '/assets/upload/image_UsserAdmin');
// src trang 
define('BASE_URL_Touar', '?mode=client&act=tour');
define('BASE_URL_TouarDaLuu', '?page=user&sidebar=TuarDaLuu');

define('ThemTouarShoping', '?mode=client&act=ThemTouarChoThanhToan');
define('ThemTouarYeuThich', '?mode=client&act=ThemTouarlove');
define('XoaYeuThich', '?mode=client&act=XoaTouarlove');





// database

define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'simple_shop');  // Tên database

define('PATH_ROOT', __DIR__ . '/../');
