<?php
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
    public function login($requestData)
    {
        // echo json_encode($requestData);
        // exit;
        unset($_SESSION['success']);
        if (
            $requestData['username'] == ''
            || $requestData['password'] == ''
        ) {
            $_SESSION['errorlogin'] = "Mời Nhập Tất Cả Các Trường Thông Tin !";
            header('Location:' . BASE_URL . '?mode=client&act=showfromlogin');
            exit;
        }

        $username = trim($requestData['username']);
        $password = trim($requestData['password']);

        $user = new User();
        $datauserclient = $user->GetAll();

        $TontaiUsename = false;
        foreach ($datauserclient as $value) {
            if ($value->username == $username || $value->email == $username) {
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
            echo json_encode([
                'success' => false,
                'errorlogin' => "username or Email Không Tồn Tại or Lỗi Đăng Nhập!"
            ]);
            exit();
        }

        $valueUserClient = false;
        foreach ($datauserclient as $value) {
            if (($value->username == $username || $value->email == $username) && $value->password == $password) {
                $valueUserClient = true;
                $idUserClient = $value->id;
                break;
            }
        }
        // var_dump($idUserClient);
        // die;

        if (!$valueUserClient) {
            echo json_encode([
                'success' => false,
                'errorlogin' => "username or Email or Password Không Đúng or Lỗi Đăng Nhập!"
            ]);
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
        echo json_encode([
            'success' => true,
            'redirect' => BASE_URL . '?mode=client&act=clientaccount',
            'errorlogin' => "Đăng Nhập Thành Công! Chuyển Hướng..."
        ]);
        exit;
    }

    // show Form đăng ký
    public function ShowFromSigin()
    {
        require_once  Views_Client . "sigin.php";
    }

    // sử lý đăng ký
    public function Sigin($requestData)
    {
        // echo json_encode($requestData['username']);
        // exit;
        $user = new User();
        $datauser = $user->GetAll();
        if (
            $requestData['username'] == ''
            || $requestData['email'] == ''
            || $requestData['password'] == ''
        ) {
            echo json_encode([
                'success' => false,
                'errorsigin' => "Mời Nhập Tất Cả Các Trường Thông Tin !"
            ]);
            exit;
        }

        $email = trim($requestData['email']);
        $username = trim($requestData['username']);
        $password = trim($requestData['password']);

        foreach ($datauser as $datauservalue):
            if ($datauservalue->email == $email || $datauservalue->username == $username) {
                echo json_encode([
                    'success' => false,
                    'errorsigin' => "Email or username đã tồn tại hoặc lỗi đăng ký!"
                ]);
                exit;
            }
        endforeach;

        // $patternPassword = '/^[A-Z](?=.*\d)(?=.*\W)/'; //viết hoa chữ cái đầu và 1 số và 1 ký tự đặc biệt
        $patternPassword = '/^(?=.*\d)(?=.*\W)/'; //viết hoa chữ cái đầu và 1 số và 1 ký tự đặc biệt
        $patternUserName = '/^[A-Z](?=.*\d)/'; //viết hoa chữ cái đầu và 1 ký tự đặc biệt và 1 số
        // if (strlen($username) < 8 || !preg_match($patternUserName, $username)) {
        //     $_SESSION['errorsigin'] = "Tên Đăng Nhập ít nhất 8 ký tự viết hoa chữ cái đầu  và 1 số!";
        //     header("Location: " . BASE_URL . "?mode=client&act=showformsigin");
        //     exit();
        // }
        if (strlen($password) < 8 || !preg_match($patternPassword, $password)) {
            echo json_encode([
                'success' => false,
                'errorsigin' => "Mật Khẩu ít nhất 8 ký tự ít nhất 1 số và 1 ký tự đặc biệt!"
            ]);
            exit;
        }

        // if ($password !== $confirm_password) {
        //     $_SESSION['errorsigin'] = "Mật khẩu không khớp!";
        //     header("Location: " . BASE_URL . "?mode=client&act=showformsigin");
        //     exit();
        // }

        unset($_SESSION['errorsigin']);
        $user->Inssetregister($requestData);
        $_SESSION['success'] = "Đăng Ký Thành Công! Mời Đăng Nhập.";
        echo json_encode([
            'success' => true,
            'redirect' => BASE_URL . '?mode=client&act=showfromlogin',
            'errorsigin' => "Đăng ký thành công! Chuyển hướng đến trang đăng nhập..."
        ]);
        exit;
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
