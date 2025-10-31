<?php
class AccountInformationController
{
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

        $dataUser = $user->GetOne($_SESSION['valueUserClient']->id);
        // var_dump($data);
        // die;
        $dataTuarDaLuu = $tuar->getTuarDaLuu($dataUser->id);

        $dataChoThanhToan = $tuar->getTuarChoThanhToanModel($dataUser->id);
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
