<?php
require_once __DIR__ . '/commons/env.php';
require_once __DIR__ . '/commons/function.php';

require_once __DIR__ . "/models/Blog.php";
require_once __DIR__ . "/models/Categories.php";
require_once __DIR__ . "/models/Comments.php";
require_once __DIR__ . "/models/Tags.php";
require_once __DIR__ . "/models/User.php";
require_once __DIR__ . "/models/TuarModel.php";


require_once __DIR__ . "/controllers/BlogController.php";
require_once __DIR__ . "/controllers/TuarController.php";
require_once __DIR__ . "/controllers/UserLoginSiginController.php";
require_once __DIR__ . "/controllers/TrangchuController.php";
require_once __DIR__ . "/controllers/VechungtoiController.php";
require_once __DIR__ . "/controllers/HoTro.php";
require_once __DIR__ . "/controllers/AdminController.php";
require_once __DIR__ . "/controllers/SiderbarHeaderFooterAdmin.php";


$mode = isset($_GET['mode']) ? $_GET['mode'] : 'client';
switch ($mode) {
    case 'client': {
            require_once Views_Router . "client.php";
            break;
        }
    case 'admin': {
            require_once Views_Router . "admin.php";
            break;
        }
    default:
        require_once Views_Router . "client.php";
        break;
}
