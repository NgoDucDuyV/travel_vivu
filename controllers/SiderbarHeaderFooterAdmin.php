<?php
class Header
{
    // hiển thị ra header Admin
    public function ShowHeader()
    {
        // lấy thông tin đăng nhập Admin
        if (isset($_SESSION['UserAdminn'])) {
            $useradmin = new UserAdmin();
            $dataOneUserAdmin = $useradmin->GetOne($_SESSION['dataOneUserAdmin']->id);
        }
        // var_dump($_SESSION['UserAdminn']);
        // die;
        include Views_Admin . "partials/header.php";
    }
}
class Footer
{
    // hiển thị fotter Admin
    public function ShowFooter()
    {
        include Views_Admin . "partials/footer.php";
    }
}

class SiderBar
{
    // hiển thị siderbar Admin
    public function ShowSiderBar()
    {
        $useradmin = new UserAdmin();
        $dataOneUserAdmin = $useradmin->GetOne($_SESSION['dataOneUserAdmin']->id);

        // var_dump($dataOneUserAdmin);
        // die;
        include Views_Admin . "partials/siderbarAdmin.php";
    }
}
