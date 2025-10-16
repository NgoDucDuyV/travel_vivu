<?php
$act = isset($_GET['act']) ? $_GET['act'] : '/';
ob_start();
match ($act) {
    '/' => (new LoginControllerAdmin())->ShowFromLogin(),
    'showfromloginAdmin' => (new LoginControllerAdmin())->ShowFromLogin(),
    'loginAdmin' => (new LoginControllerAdmin())->login(),
    'logoutAdmin' => (new LoginControllerAdmin())->logout(),
    'CaidatThongTinUserAdmin' => (new AdminController())->CaidatThongTinUserAdmin($_GET['id']),
    'UpdateAvataUserAdmin' => (new AdminController())->UpdateAvataAdmin($_GET['id']),
    'gioithieuAdmin' => (new AdminController)->ShowGioiThieu(),
    'gioithieuAdmin' => (new AdminController)->ShowGioiThieu(),

    // thêm nhân viên mới
    'NhanVienMoi' => (function () {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            (new AdminController)->ShowFormNhanVienMoi();
        } else {
            (new AdminController)->InertNhanVienMoi();
        }
    })(),
    'quanlyUserkhachhang' => (new AdminController)->UserKhachHang(),
    'quanlyUserNhanVien' => (new AdminController)->UserNhanVien(),
    'ShowDetailsNhanVien' => (new AdminController)->ShowDetailsNhanVien($_GET['id']),

    'EditUserNhanVien' => (function () {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            (new AdminController)->ShowFromEditNhanVien($_GET['id']);
        } else {
            (new AdminController)->UpdateUserNhanVien($_GET['id']);
        }
    })(),
    'DeleteUSserNhanVien' => (new AdminController)->DeleteUserNhanVien($_GET['id']),


    // QUANR LYS TOUAR HOAT DONG 
    'quanlyTuarHoatDong' => (new AdminController)->TuarHoatDong(),
    'ThemTouarMoi' => (function () {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            (new AdminController)->ShowThemTourMoi();
        } else {
            (new TuarController)->InsertTouar();
        }
    })(),
    'editTuar' => (function () {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            (new AdminController)->ShowFromEditTuarHoatDong($_GET['id']);
        } else {
            (new TuarController)->UpdateTouar($_GET['id']);
        }
    })(),
    'deletetouar' => (new TuarController())->DeleteTouar($_GET['id']),
    'ShowTouarHoatDong' => (new AdminController)->ShowTouarHoatDong($_GET['id']),

    
    // quanr lys cas dien rdem
    'quanlyTuarCacDiemDen' => (new AdminController)->QuanLyTuarCacDiemDen(),
    default => require_once Views_Admin . "norecord.php",
};
$content_views = ob_get_clean();
?>

<?php
if ($act == 'showfromloginAdmin' || $act == "/") {
    echo $content_views;
    exit;
}
?>

<?php if (isset($_SESSION['UserAdminn'])): ?>
    <?php (new SiderBar())->ShowSiderBar(); ?>
    <main class="content-area">
        <?php (new Header())->ShowHeader(); ?>
        <div class="contant_admin">
            <?= $content_views; ?>
        </div>
        <?php (new Footer())->ShowFooter(); ?>
    </main>
    <?php exit; ?>
<?php endif ?>

<?php if (!isset($_SESSION['UserAdminn'])) {
    $src = '?mode=admin&act=showfromloginAdmin';
    (new Showformloidangnhap())->Showformloidangnhap($src);
    exit;
}
?>