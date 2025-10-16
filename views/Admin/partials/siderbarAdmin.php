<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiderBarAdmin</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <style>
    </style>
</head>

<body>
    <div class="siderabrAdmin my-box">
        <div class="closeSiderbar" onclick="OfSiderBar()">
            <i class='bxr  bx-chevrons-left'></i>
        </div>
        <a href="<?= BASE_URL ?>?mode=admin&act=gioithieuAdmin">
            <div class="logo">
                <img src="<?= Image_Admin ?>logo_black.png" alt="">
            </div>
        </a>
        <div class="dieuhuong">
            <div class="h6">
                <h6>ĐIỀU HƯỚNG</h6>
            </div>
            <div class="menu">
                <ul class="sub_menu">
                    <?php if ($dataOneUserAdmin->role_id == 1): ?>
                        <li class="menu_item "><a href="<?= BASE_URL ?>?mode=admin&act=NhanVienMoi" data-action="NhanVienMoi"><i class='bxr  bx-community icon_box'></i>Nhân Viên Mới <span class="arrow_box"></span></a></li>
                        <li class="menu_item menuitemOption"><a href=""> <i class='bxr  bx-community icon_box'></i>Quản lý Đăng Nhập User <span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item ">
                                <li class="menu_item"><a href="<?= BASE_URL ?>?mode=admin&act=quanlyUserNhanVien" data-action="quanlyUserNhanVien"><i class='bxr  bx-community icon_box'></i>Nhân Viên</a></li>
                                <li class="menu_item"><a href="<?= BASE_URL ?>?mode=admin&act=quanlyUserkhachhang" data-action="quanlyUserkhachhang"><i class='bxr  bx-user'></i> </i>Khách Hàng</a></li>
                            </ul>
                        </li>
                    <?php endif ?>
                    <?php if ($dataOneUserAdmin->role_id == 1 || $dataOneUserAdmin->role_id == 3): ?>
                        <li class="menu_item menuitemOption"><a href=""><i class='bxr  bx-globe-asia'></i>Quản lý Tuar <span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item">
                                <li class="menu_item"><a href="<?= BASE_URL ?>?mode=admin&act=quanlyTuarHoatDong" data-action="quanlyTuarHoatDong"><i class='bxr  bx-plane-land icon_box'></i>Tour Hoạt Động</a></li>
                                <li class="menu_item"><a href="<?= BASE_URL ?>?mode=admin&act=quanlyTuarCacDiemDen" data-action="quanlyTuarCacDiemDen"><i class='bxr  bx-location-alt-2'></i> Điểm Đến</a></li>
                                <li class="menu_item"><a href="<?= BASE_URL ?>?mode=admin&act=quanlyTuar" data-action="quanlyTuar"><i class='bxr  bx-trip'></i> Các Hoạt Động </a></li>
                                <li class="menu_item"><a href="<?= BASE_URL ?>?mode=admin&act=quanlyTuar" data-action="quanlyTuar"><i class='bxr  bx-camping'></i> Các Loại Touar</a></li>
                            </ul>
                        </li>
                        <li class="menu_item menuitemOption"><a href=""><i class='bxr  bx-article icon_box'></i>Quản lý Blog<span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item">
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Thông Tin Các Blog</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Tag Blog</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Category Blog</a></li>
                            </ul>
                        </li>
                        <li class="menu_item menuitemOption"><a href=""><i class='bxr  bx-user-id-card'></i> </i>Quản lý Coment<span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item">
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Coment Touar</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Coment Blog</a></li>
                            </ul>
                        </li>
                        <li class="menu_item menuitemOption"><a href=""><i class='bxr  bx-phone-book icon_box'></i>Quản lý thộng tin liên hệ <span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item">
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Danh sách liên hệ</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Phân loại liên hệ</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Thống kê liên hệ</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Lịch Sử Touar Đã đặt</a></li>
                            </ul>
                        </li>
                        <li class="menu_item menuitemOption"><a href=""><i class='bxr  bx-price-tag icon_box'></i>Quản lý Banner <span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item">
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Danh Sách Các Banner </a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Các vocher Sale (Giảm giá)</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Các Touar Đang Sale</a></li>
                            </ul>
                        </li>
                    <?php endif ?>
                    <?php if ($dataOneUserAdmin->role_id == 1 || $dataOneUserAdmin->role_id == 4): ?>
                        <li class="menu_item menuitemOption"><a href=""><i class='bxr  bx-wallet-alt icon_box'></i>Quản lý Thanh toán<span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item">
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Danh sách thanh toán</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Hủy Đơn Hoàn Tiền Khách Hàng</a></li>
                            </ul>
                        </li>
                        <li class="menu_item menuitemOption"><a href=""><i class='bxr  bx-file-report icon_box'></i>Quản lý (Xem báo cáo)<span class="arrow_box"><i class='bxr  bx-chevron-down arrow_box'></i></span></a>
                            <ul class="submenu_item">
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Báo cáo doanh thu</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Báo cáo đơn tour</a></li>
                                <li class="menu_item"><a href="" data-action="noApi"><i class='bxr  bx-community icon_box'></i>Báo cáo khách hàng</a></li>
                            </ul>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- <script>
        const menuitems = document.querySelectorAll('.menu_item>a');
        const contentUser = document.querySelector('.content_user');
        const BASE_URL = '<?= BASE_URL ?>';

        function FetchApi(page, action) {
            let url = `${BASE_URL}?page=${page}&action=${action}`;
            console.log(url);

            fetch(url)
                .then(res => res.text())
                .then(html => {
                    document.querySelector('.content_user').innerHTML = html;
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                })
                .finally(() => {

                });
        }
        menuitems.forEach(function(el) {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                const page = 'authAdmin';
                let action = this.dataset.action;
                FetchApi(page, action);
            });
        })
    </script> -->
    <script src="<?= Js_Admin ?>BaseJs.js"></script>
    <script src="<?= Js_Admin ?>QuanLyTouarHoatDong.js"></script>
</body>

</html>