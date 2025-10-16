<?php
class TrangchuController
{
    public function ShowTrangchu()
    {
        // data danh sách tất cả cs touar
        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();
        // danh sách các điểm đến
        $destination = new DestinationModel();
        $dataDestination = $destination->GetAll();
        // danh sách tát cả các bài viết blog 
        $blog = new Blog();
        $datablog = $blog->GetAll();

        // lấy danh danh sách yêu thích
        if (isset($_SESSION['username'])) {
            // var_dump($_SESSION['valueUserClient']->id);
            // die;
            $Usersaved = new Usersaved();
            $dataUserSaved_UserId =  $Usersaved->getAllUserSaved_UserId($_SESSION['valueUserClient']->id);
            // var_dump($dataUserSaved_UserId);
            // die;
        }
        include Views_Client . "trangchu.php";
    }

    // hiện thị ra header
    public function ShowHeader()
    {
        // lấy thông tin user đăng nhập
        if (isset($_SESSION['username'])) {
            $user = new User();
            $data = $user->GetOne($_SESSION['valueUserClient']->id);
            // var_dump($data->image);
            // die;

            $usershoping = new Usershoping();
            $dataUsershoping = $usershoping->GetAllUserShoping($data->id);
            // var_dump($dataUsershoping);
            // die;
        }
        require_once Views_Client . "partials/header.php";
    }

    // hiển thị ra footer
    public function ShowFooter()
    {
        // lấy thông tin user đăng nhập
        if (isset($_SESSION['username'])) {
            $user = new User();
            $data = $user->GetOne($_SESSION['valueUserClient']->id);
        }
        require_once Views_Client . "partials/footer.php";
    }
}
