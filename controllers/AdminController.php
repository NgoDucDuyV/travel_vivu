<?php
class AdminController
{

    // Show Giới thiệu
    public function ShowGioiThieu()
    {

        include Views_Admin . 'giotthieuAdmin.php';
    }
    // User Admin Chỉnh Sửa thông tin cài đặt cá nhân 
    public function CaidatThongTinUserAdmin($id)
    {
        $userAdmin = new UserAdmin();
        $datauserAdmin = $userAdmin->GetOne($id);

        $roles = new Role();
        $dataRole = $roles->GetAll();
        // var_dump($datauserAdmin);
        // die;
        include Views_Admin . "CaidatThongTinUserAdmin.php";
    }

    // Hiển Thị Bảng danh mục tất cả nhân viên
    public function UserNhanVien()
    {
        $userAdmin = new UserAdmin();
        $datauserAdmin = $userAdmin->GetAll();

        include Views_Admin . "quanlyUserNhanVien.php";
    }
    // Show From Thêm Nhân Viên mới
    public function ShowFormNhanVienMoi()
    {
        $roles = new Role();
        $dataRole = $roles->GetAll();
        include Views_Admin . "Nhanvienmoi.php";
    }

    // xem chi tiết thông tin user admin
    public function ShowDetailsNhanVien($id)
    {
        $userAdmin = new UserAdmin();
        $datauserAdmin = $userAdmin->GetOne($id);

        // var_dump($datauserAdmin);
        // die;
        include Views_Admin . "ShowDetailsNhanVien.php";
    }

    // Show From Chỉnh Sửa Nhân Viên
    public function ShowFromEditNhanVien($id)
    {
        $userAdmin = new UserAdmin();
        $datauserAdmin = $userAdmin->GetOne($id);

        $roles = new Role();
        $dataRole = $roles->GetAll();

        // var_dump($datauserAdmin);
        // die;
        include Views_Admin . "EditUserNhanVien.php";
    }
    // Thảy đổi Avata User Admin
    public function UpdateAvataAdmin($id)
    {
        // header('Content-Type: application/json');
        // $response = [];
        if (
            $_FILES['image'] == ''
        ) {
            $_SESSION['errorUpdateAvata'] = 'Mời chọn ảnh mới!';
            header("Location: " . BASE_URL . "?mode=admin&act=CaidatThongTinUserAdmin&id=" . $id);
            exit;
        }

        $userAdmin = new UserAdmin();
        $datauserAdmin = $userAdmin->GetOne($id);

        $url = uploadImage(Image_UserAdmin, $_FILES['image'], $datauserAdmin->image);
        // var_dump($_FILES['image']);
        // die;
        (new UserAdmin())->UpdateAvataUserAdminModels($id, $url);
        header("Location: " . BASE_URL . "?mode=admin&act=CaidatThongTinUserAdmin&id=" . $id);
        exit;
        // echo json_encode($response);
    }
    // Sử lý chỉnh Thêm Nhân viên mới
    public function InertNhanVienMoi()
    {
        if (
            $_POST['useremail'] == ''
            || $_POST['password'] == ''
            || $_POST['fullname'] == ''
            || $_POST['sdt'] == ''
        ) {
            $_SESSION['errorInserNhanVienMoi'] = 'Mời Nhập Đầy Đủ Trường Thông Tin!';
            header("Location: " . BASE_URL . "?mode=admin&act=NhanVienMoi");
            exit;
        }

        // var_dump(
        //     $_POST['useremail'],
        //     $_POST['password'],
        //     $_POST['fullname'],
        //     $_POST['sdt'],
        //     $_POST['role_id'],
        // );
        // die;
        $userAdmin = new UserAdmin();
        $userAdmin->InsetUserAdmin();
        unset($_SESSION['errorInserNhanVienMoi']);
        header("Location: " . BASE_URL . "?mode=admin&act=quanlyUserNhanVien");
        exit;
    }
    //  Sử lý chỉnh sửa nhan viên 
    public function UpdateUserNhanVien($id)
    {
        if (
            $_POST['useremail'] == ''
            || $_POST['password'] == ''
            || $_POST['fullname'] == ''
            || $_POST['sdt'] == ''
        ) {
            $_SESSION['errorEditNhanVienMoi'] = 'Mời Nhập Đầy Đủ Trường Thông Tin!';
            header("Location: " . BASE_URL . "?mode=admin&act=EditUserNhanVien&id=" . $id);
            exit;
        }
        // var_dump(
        //     $_POST['useremail'],
        //     $_POST['password'],
        //     $_POST['fullname'],
        //     $_POST['sdt'],
        //     $_POST['role_id'],
        // );
        // die;
        
        $userAdmin = new UserAdmin();
        $userAdmin->UpdateUserAdminModel($id);
        unset($_SESSION['errorEditNhanVienMoi']);
        header("Location: " . BASE_URL . "?mode=admin&act=ShowDetailsNhanVien&id=" . $id);
        exit;
    }
    // Xôa tài khoản nhân viên
    public function DeleteUserNhanVien($id)
    {

        $useradmin = new UserAdmin();
        $dataOneUserAdmin = $useradmin->GetOne($id);

        // var_dump($dataOneUserAdmin->image);
        // die;
        unlink($dataOneUserAdmin->image);
        $userAdmin = new UserAdmin();
        $userAdmin->DeleteUsserNhanVienModel($id);

        header('Location: ' . BASE_URL . '?mode=admin&act=quanlyUserNhanVien');
        exit;
    }



    // Quản lý đăng nhập khách hàng 
    public function UserKhachHang()
    {
        $user = new User();
        $datauser = $user->GetAll();

        include Views_Admin . "quanlyUserKhachhang.php";
    }



    // Hiển Thị Bảng danh mục tất cả Tour Hoat Động
    public function TuarHoatDong()
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();

        // var_dump($dataTuar);
        // die;
        include Views_Admin . 'quanLyTouarHoatDong.php';
    }

    // Show chi tiết Thông Tin touar Hoat đông
    public function ShowTouarHoatDong($id)
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->getOne($id);

        include Views_Admin . 'ShowTouarHoatjDong.php';
    }

    // Show From Thêm Mới Touar Hoat động
    public function ShowThemTourMoi()
    {
        $Destination = new DestinationModel();
        $dataDestination = $Destination->GetAll();

        // var_dump();
        // die;
        $Activities = new ActivitiesModel();
        $dataActivities = $Activities->GetAll();

        $Typeodtouar = new TypeodtouarModel();
        $dataTypeodtouar = $Typeodtouar->GetAll();

        $Difficulty = new DifficultyModel();
        $dataDifficulty = $Difficulty->GetAll();

        $Categories_destinationModel = new Categories_destinationModel();
        $dataCategories_destinationModel = $Categories_destinationModel->GetAll();

        // var_dump($dataDifficulty);
        // die;
        include Views_Admin . 'ThemTouarMoi.php';
    }

    // Show From Idit Touar Hoạt động 
    public function ShowFromEditTuarHoatDong($id)
    {
        $touar = new TuarModel();
        $datatouar = $touar->getOne($id);

        $Destination = new DestinationModel();
        $dataDestination = $Destination->GetAll();

        // var_dump();
        // die;
        $Activities = new ActivitiesModel();
        $dataActivities = $Activities->GetAll();

        $Typeodtouar = new TypeodtouarModel();
        $dataTypeodtouar = $Typeodtouar->GetAll();

        $Difficulty = new DifficultyModel();
        $dataDifficulty = $Difficulty->GetAll();

        $Categories_destinationModel = new Categories_destinationModel();
        $dataCategories_destinationModel = $Categories_destinationModel->GetAll();

        include Views_Admin . 'EditTuar.php';
    }

    // Hiển Thị Bảng danh mục các điểm đến
    public function QuanLyTuarCacDiemDen()
    {
        $Destination = new DestinationModel();
        $dataDestination = $Destination->GetAll();

        // var_dump($dataTuar);
        // die;

        include Views_Admin . 'quanLyTouarCacDiemDen.php';
    }


    // $dir : nơi lưu file
    // $file : là cái file muốn upload
    // $url : đường dẫn file sau khi upload => lưu vào DB
}
