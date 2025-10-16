<?php
session_start();
// Đăng Ký đăng nhập User Client
class UserLoginSiginController
{
    // private $userModel;
    // public function __construct()
    // {
    //     $this->userModel = new User();
    // }

    // Show form ddawng nhaapj
    public function ShowFromLogin()
    {
        if (isset($_SESSION['username'])) {
            header("Location: " . BASE_URL . "?mode=client&act=clientaccount");
            exit;
        }
        require_once  Views_Client . "login.php";
    }

    // su lý đăng nhập 
    public function login()
    {

        unset($_SESSION['success']);
        if (
            $_POST['username'] == ''
            || $_POST['password'] == ''
        ) {
            $_SESSION['errorlogin'] = "Mời Nhập Tất Cả Các Trường Thông Tin !";
            header('Location:' . BASE_URL . '?mode=client&act=showfromlogin');
            exit;
        }

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $user = new User();
        $datauserclient = $user->GetAll();

        $TontaiUsename = false;
        foreach ($datauserclient as $value) {
            if ($value->username == $username) {
                $TontaiUsename = true;
                break;
            }
        }

        // foreach ($dataUserAdmin as $dataUserAdminvalue):
        //     if ($dataUserAdminvalue->useremail == $username) {
        //         $TontaiUsename = "CÓ TỒN TẠI";
        //     }
        // endforeach;

        if (!$TontaiUsename) {
            $_SESSION['errorlogin'] = "Tên Đăng Nhập Không Tồn Tại or Lỗi Đăng Nhập!";
            header('Location:' . BASE_URL . '?mode=client&act=showfromlogin');
            exit();
        }

        $valueUserClient = false;
        foreach ($datauserclient as $value) {
            if ($value->username == $username && $value->password == $password) {
                $valueUserClient = true;
                $idUserClient = $value->id;
                break;
            }
        }
        // var_dump($idUserClient);
        // die;

        if (!$valueUserClient) {
            $_SESSION['errorlogin'] = "Tên Đăng Nhập or Pwssword Không Đúng or Lỗi Đăng Nhập!";
            header('Location:' . BASE_URL . '?mode=client&act=showfromlogin');
            exit();
        }

        $datauserone = $user->GetOne($idUserClient);
        unset($_SESSION['errorlogin']);
        $_SESSION['username'] = $username;
        $_SESSION['valueUserClient'] = $datauserone; // thông tin của user Client
        // var_dump($_SESSION['valueUserClient']->id);
        // die;
        // echo json_encode([
        //     'url' => BASE_URL . "?mode=client&act=clientaccount"
        // ]);
        header("Location: " . BASE_URL . "?mode=client&act=clientaccount");
        exit;
    }

    // show Form đăng ký
    public function ShowFromSigin()
    {
        require_once  Views_Client . "sigin.php";
    }

    // sử lý đăng ký
    public function Sigin()
    {
        $user = new User();
        $datauser = $user->GetAll();

        if (
            $_POST['name'] == ''
            || $_POST['email'] == ''
            || $_POST['username'] == ''
            || $_POST['password'] == ''
            || $_POST['confirm_password'] == ''
        ) {
            $_SESSION['errorsigin'] = "Mời Nhập Tất Cả Các Trường Thông Tin !";
            header('Location:' . BASE_URL . '?mode=client&act=showformsigin');
            exit();
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirm_password = $_POST['confirm_password'];

        foreach ($datauser as $datauservalue):
            if ($datauservalue->username == $username) {
                $_SESSION['errorsigin'] = "Tên đăng nhập đã tồn tại hoặc lỗi đăng ký!";
                header("Location: " . BASE_URL . "?mode=client&act=showformsigin");
                exit();
            }
        endforeach;

        $patternPassword = '/^[A-Z](?=.*\d)(?=.*\W)/'; //viết hoa chữ cái đầu và 1 số và 1 ký tự đặc biệt
        $patternUserName = '/^[A-Z](?=.*\d)/'; //viết hoa chữ cái đầu và 1 ký tự đặc biệt và 1 số
        if (strlen($username) < 8 || !preg_match($patternUserName, $username)) {
            $_SESSION['errorsigin'] = "Tên Đăng Nhập ít nhất 8 ký tự viết hoa chữ cái đầu  và 1 số!";
            header("Location: " . BASE_URL . "?mode=client&act=showformsigin");
            exit();
        }

        if (strlen($password) < 10 || !preg_match($patternPassword, $password)) {
            $_SESSION['errorsigin'] = "Mật Khẩu ít nhất 10 ký tự viết hoa chữ cái đầu và 1 ký tự đặc biệt và 1 số!";
            header("Location: " . BASE_URL . "?mode=client&act=showformsigin");
            exit();
        }

        if ($password !== $confirm_password) {
            $_SESSION['errorsigin'] = "Mật khẩu không khớp!";
            header("Location: " . BASE_URL . "?mode=client&act=showformsigin");
            exit();
        }

        unset($_SESSION['errorsigin']);
        $user->Inssetregister();
        $_SESSION['success'] = "Đăng ký thành công! Bạn có thể đăng nhập.";
        header("Location: " . BASE_URL . "?mode=client&act=showfromlogin");
        exit();
    }

    // viewws trang thổi mật khuâu quên mật khẩu
    public function resetPassword()
    {
        require_once Views_Client . "resetPassword.php";
    }
    // đăng xuất user client
    public function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['valueUserClient']);
        header("Location: " . BASE_URL . "?mode=client&act=showfromlogin");
        exit;
    }

    // views Giao diện đăng nhập Tài khoản người dùng
    public function ShowDattuar()
    {
        $view_file = Views_Client . 'userdattua.php';
        $this->ShowOptionUser($view_file);
    }

    public function ShowDiachi()
    {
        $view_file = Views_Client . 'userDiachi.php';
        $this->ShowOptionUser($view_file);
    }

    public function ShowTaikoan()
    {
        $view_file = Views_Client . 'userTaikhoan.php';
        $this->ShowOptionUser($view_file);
    }
    public function ShowTuarDaLuu()
    {
        $view_file = Views_Client . 'tuarDaLuu.php';
        $this->ShowOptionUser($view_file);
    }
    public function ShowTuarChoThanToan()
    {
        $view_file = Views_Client . 'touarChothanhtoan.php';
        $this->ShowOptionUser($view_file);
    }

    public function ShowOptionUser($view_file)
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();
        // var_dump($dataTuar);
        // die;
        $user = new User();
        $data = $user->GetOne($_SESSION['valueUserClient']->id);
        // var_dump($data);
        // die;
        $dataTuarDaLuu = $tuar->getTuarDaLuu($data->id);

        $dataChoThanhToan = $tuar->getTuarChoThanhToanModel($data->id);

        require_once $view_file;
    }

    public function ShowSiderbarUser()
    {

        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();
        // var_dump($dataTuar);
        // die;
        $user = new User();
        $data = $user->GetOne($_SESSION['valueUserClient']->id);
        // var_dump($data);
        // die;
        $dataTuarDaLuu = $tuar->getTuarDaLuu($data->id);

        $dataChoThanhToan = $tuar->getTuarChoThanhToanModel($data->id);
        // var_dump($dataTuarDaLuu);
        // die;
        $view_file = Views_Client . "touarChothanhtoan.php";
        require Views_Client . "partials/siderbarUser.php";
    }

    // them ảnh Avate 
    public function Themimageuser($id)
    {
        // var_dump($_FILES['image']);
        // die;
        if (
            $_FILES['image'] == ''
        ) {
            header("Location: " . BASE_URL . "?mode=client&act=taikhoan");
            exit;
        }
        $user = new User();
        $datauser = $user->GetOne($_SESSION['valueUserClient']->id);

        // var_dump($datauser->image);
        // die;
        $url = uploadImage(Image_Admin, $_FILES['image'], $datauser->image);

        $user = new User();
        $user->Imageuser($url, $id);

        header("Location: " . BASE_URL . "?mode=client&act=clientaccount");
    }
}

// đăng nhập Admin
class LoginControllerAdmin
{
    // show form đăng nhập admin
    public function ShowFromLogin()
    {
        if (isset($_SESSION['UserAdminn'])) {
            header('Location: ' . BASE_URL . '?mode=admin&act=gioithieuAdmin');
            exit;
        }
        
        require_once Views_Admin . "formloginAdmin.php";
    }

    // sử lý đăng nhập admin
    public function login()
    {
        if (
            $_POST['useremail'] == ''
            || $_POST['password'] == ''
        ) {
            $_SESSION['errorloginAdmin'] = "Mời Nhập Tất Cả Các Trường Thông Tin !";
            header('Location: ' . BASE_URL . '?mode=admin&act=showfromloginAdmin');
            exit;
        }
        $useremail = trim($_POST['useremail']);
        $password = trim($_POST['password']);

        $useradmin = new UserAdmin();
        $dataUserAdmin = $useradmin->GetAll();

        // var_dump($dataUserAdmin);
        // die;
        $TontaiUsename = false;
        foreach ($dataUserAdmin as $value):
            if ($value->useremail == $useremail) {
                $TontaiUsename = true;
                break;
            }

            if ($value->email == $useremail) {
                $TontaiUsename = true;
                break;
            }
        endforeach;

        if (!$TontaiUsename) {
            $_SESSION['errorloginAdmin'] = "Email Đăng Nhập Không tồn tại!";
            header('Location: ' . BASE_URL . '?mode=admin&act=showfromloginAdmin');
            exit;
        }

        $UserAdminDung = false;
        foreach ($dataUserAdmin as $value):
            if ($value->useremail == $useremail && $value->password == $password) {
                $UserAdminDung = true;
                $idUserAdmin = $value->id;
                break;
            }
            if ($value->email == $useremail && $value->password == $password) {
                $UserAdminDung = true;
                $idUserAdmin = $value->id;
                break;
            }
        endforeach;

        if (!$UserAdminDung) {
            $_SESSION['errorloginAdmin'] = " Cỏ Vẻ Password chưa đúng";
            header('Location: ' . BASE_URL . '?mode=admin&act=showfromloginAdmin');
            exit;
        }

        // value tài khoản bằng id $idUserAdmin 
        $dataOneUserAdmin = $useradmin->GetOne($idUserAdmin);
        unset($_SESSION['errorloginAdmin']);
        $_SESSION['UserAdminn'] = $useremail;
        $_SESSION['dataOneUserAdmin'] = $dataOneUserAdmin;
        $_SESSION['RoleAdmin'] = $dataOneUserAdmin->role_id;
        // var_dump($_SESSION['dataOneUserAdmin']);
        // die;
        header('Location: ' . BASE_URL . '?mode=admin&act=gioithieuAdmin');
        exit;
    }

    // đăng xuất tài khoản Admin
    public function logout()
    {
        unset($_SESSION['UserAdminn']);
        unset($_SESSION['dataOneUserAdmin']);
        unset($_SESSION['RoleAdmin']);
        header('Location: ' . BASE_URL . '?mode=admin&act=showfromloginAdmin');
        ob_end_flush();
        exit;
    }
}
// form lỗi dăng nhập
class Showformloidangnhap
{
    public function Showformloidangnhap($src)
    {
        // var_dump($src);
        // die;
        require_once Views_Client . "loidangnhap.php";
    }
}
