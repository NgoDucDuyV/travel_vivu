<?php
class TuarController
{
    // Hiển Thị Tất cả các tỏau ở trang chu touar
    public function ShowTuar()
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();
        // Các điẻm đến
        $destination = new DestinationModel();
        $dataDestination = $destination->GetAll();
        // các lopaij touar
        $typeodtouar = new TypeodtouarModel();
        $dataTypeodtouar = $typeodtouar->GetAll();

        // các hoạt dộng
        $activities = new ActivitiesModel();
        $dataActivities = $activities->GetAll();

        // độ khó
        $difficulty = new DifficultyModel();
        $dataDifficulty = $difficulty->GetAll();

        if (isset($_SESSION['username'])) {
            // var_dump($_SESSION['valueUserClient']->id);
            // die;
            $Usersaved = new Usersaved();
            $dataUserSaved_UserId =  $Usersaved->getAllUserSaved_UserId($_SESSION['valueUserClient']->id);
            // var_dump($dataUserSaved_UserId);
            // die;
        }
        // var_dump(empty($dataUserSaved_UserId));
        // die;
        include Views_Client . "TrangChuTuar.php";
    }

    // khách hàng xem chi tiết touar 
    public function ShowTourDetails($id)
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->getOne($id);

        // var_dump($dataTuar->date_creation);
        // die;
        if (isset($_SESSION['username'])) {
            // var_dump($_SESSION['valueUserClient']->id);
            // die;
            $Usersaved = new Usersaved();
            $dataUserSaved_UserId =  $Usersaved->getAllUserSaved_UserId($_SESSION['valueUserClient']->id);
            // var_dump($dataUserSaved_UserId);
            // die;
        }
        // var_dump(empty($dataUserSaved_UserId));
        // die;
        include Views_Client . "touat_details.php";
    }

    // Hiển thị các điểm đến
    public function ShowDiemDen()
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();

        $destination = new DestinationModel();
        $dataDestination = $destination->GetAll();

        include Views_Client . "touar_diemden.php";
    }

    // hiển thị cá loại touar
    public function ShowCacLoaiTouar()
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();

        $typeodtouar = new TypeodtouarModel();
        $dataTypeodtouar = $typeodtouar->GetAll();

        include Views_Client . "touar_cacloaitouar.php";
    }

    // hiển thị các hoạt động
    public function ShowCacHoatDong()
    {
        $tuar = new TuarModel();
        $dataTuar = $tuar->GetAll();

        $activities = new ActivitiesModel();
        $dataActivities = $activities->GetAll();

        include Views_Client . "touar_cachoatdong.php";
    }



    // thêm touar vào yêu thích Khách hàng
    public function issetTouarYeuThich($tuar_id)
    {
        if (!isset($_SESSION['username'])) {
            echo $_SESSION['errorlogin'] = 'XIN MỜI ĐĂNG NHẬP TÀI KHOẢN ĐỂ Lưu touar !';
            header('Location:' . BASE_URL . '?mode=client&act=showfromlogin');
            exit;
        }

        $Usersaved = new Usersaved();
        $Usersaved->InsertYeuThichTouar($_SESSION['valueUserClient']->id, $tuar_id);

        header('Location: ' . BASE_URL . BASE_URL_Touar);
        exit;
    }

    // xóa touar yêu thích khách hàng
    public function deleteTouarYeuThich($tuar_id)
    {

        $Usersaved = new Usersaved();
        $Usersaved->DelateYeuThichTouar($_SESSION['valueUserClient']->id, $tuar_id);

        header('Location: ' . BASE_URL . BASE_URL_Touar);
        exit;
    }


    // them touar vao muc thanh toan sau
    public function issetUsserShoping($tuar_id)
    {
        if (!isset($_SESSION['username'])) {
            echo $_SESSION['errorlogin'] = 'XIN MỜI ĐĂNG NHẬP TÀI KHOẢN ĐỂ THÊM Touar vào giỏ hàng !';
            header('Location:' . BASE_URL . '?mode=client&act=showfromlogin');
            exit;
        }

        // var_dump($tuar_id);
        // die;
        $usershoping = new Usershoping();
        $usershoping->InsertShopingModel($_SESSION['valueUserClient']->id, $tuar_id);

        header('Location: ' . BASE_URL . '?mode=client&act=tour_details&id=' . $tuar_id);
        exit;
    }

    // thêm touar mới 
    public function InsertTouar()
    {

        if (
            $_POST['title'] == ''
            || $_POST['description'] == ''
            || $_POST['destination_id'] == ''
            || $_POST['activities_id'] == ''
            || $_POST['typeodtouar_id'] == ''
            || $_POST['difficulty_id'] == ''
            || $_POST['categories_destination_id'] == ''
            || $_POST['time_days'] == ''
            || $_POST['soluong_people'] == ''
            || $_POST['price'] == ''
            || $_FILES['image'] == ''
        ) {
            $_SESSION['errorInsertTouar'] = 'Xin Mời Nhập tất cả các trường thông tin !';
            header('Location: ' . BASE_URL . '?page=authAdmin&action=ThemTouarMoi');
            exit;
        }

        $url = uploadImage(Image_Touar, $_FILES['image']);


        // var_dump($url);
        // die;
        $touar = new TuarModel();
        $touar->InsertTouarModel($url);

        unset($_SESSION['errorInsertTouar']);
        header('Location: ' . BASE_URL . '?page=authAdmin&action=quanlyTuarHoatDong');
        exit;

        // var_dump($url);
        // //  InsertTouarModel();
        // // Var_dump(
        // //     $_POST['title'],
        // //     $_POST['description'],
        // //     $_POST['destination_id'],
        // //     $_POST['activities_id'],
        // //     $_POST['typeodtouar_id'],
        // //     $_POST['difficulty_id'],
        // //     $_POST['time_days'],
        // //     $_POST['soluong_people'],
        // //     $_POST['price'],
        // //     $_FILES['image'],
        // // );

        // var_dump('Tôi Rát yêu cô ấy');
        // die;
    }

    // Editr chỉnh sửa touar
    public function UpdateTouar($id)
    {

        if (
            $_POST['title'] == ''
            || $_POST['description'] == ''
            || $_POST['destination_id'] == ''
            || $_POST['activities_id'] == ''
            || $_POST['typeodtouar_id'] == ''
            || $_POST['difficulty_id'] == ''
            || $_POST['time_days'] == ''
            || $_POST['soluong_people'] == ''
            || $_POST['price'] == ''
        ) {
            var_dump('chưa nhập hết o trông ');
            die;
            $_SESSION['errorInsertTouar'] = 'Xin Mời Nhập tất cả các trường thông tin !';
            header('Location: ' . BASE_URL . '?page=authAdmin&action=editTuar&id=' . $id);
            exit;
        }

        $touar = new TuarModel();
        $datatouar = $touar->getOne($id);
        // $dir : nơi lưu file
        // $file : là cái file muốn upload
        // $url : đường dẫn file sau khi upload => lưu vào DB
        // public function uploadImage($dir, $file, $url = null)

        // var_dump($id);
        // die;
        if ($_FILES['image'] !== '') {
            $url = uploadImage(Image_Touar, $_FILES['image'], $datatouar->image);
        } else {
            $url = $datatouar->image;
        }

        $touar = new TuarModel();
        $touar->UpdateTouarModel($url, $id);

        unset($_SESSION['errorInsertTouar']);
        header('Location: ' . BASE_URL . '?page=authAdmin&action=ShowTouarHoatDong&id=' . $id);
        exit;
    }

    // Xóa touar
    public function DeleteTouar($id)
    {

        $touar = new TuarModel();
        $datatouar = $touar->getOne($id);

        unlink($datatouar->image);
        // var_dump($datatouar->image);
        // die;
        $touar = new TuarModel();
        $touar->deleteTouar($id);

        header('Location: ' . BASE_URL . '?page=authAdmin&action=quanlyTuarHoatDong');
        exit;
    }
}
