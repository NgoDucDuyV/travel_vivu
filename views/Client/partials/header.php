<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>Header.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="srollbtn">
        <div class="srollbtn_text"><i class='bxr  bxs-arrow-big-up-line'></i> </div>
        <div class="srollbtn_nen"></div>
    </div>
    <div>
        <div class="timkiem_header" id="timkiem">
            <div class="close" onclick="closetimkiem()" id="close_header-timkiem">
                <i class='bx bxs-chevrons-left'></i>
            </div>
            <div class="timkiem_header-center" id="timkiem_header-center">
                <input type="text" class="timkiem_header-input" placeholder="Search Here...">
                <div class="kinhnup">
                    <i class='bx bx-search-alt-2'></i>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class=" tabmenu" id="tabmenuMoBi">
            <div class="closeMenuMobi" id="close-tabmenu">
                <i class='bx bxs-chevrons-left'></i>
            </div>
            <div class="logoMenuMobi">
                <img src="<?= Image_Chung ?>Screenshot 2025-08-23 231817 1.png" alt="">
            </div>
            <div id="tabmenu-menu" class="tabmenu-menu">
                <ul class="submenu_mobi">
                    <li class="mobimenu-item">
                        <a href="<?= BASE_URL ?>"><i class='bxr  bx-chevron-right'></i>Trang chủ</a>
                    </li>
                    <li class="mobimenu-item mobimenu-item_click">
                        <a href="<?= BASE_URL ?>?mode=client&act=tour"><i class='bxr  bx-chevron-right'></i>Tour</a>
                        <div class="onofmenucon">
                            <i class='bxr  bx-expand-left'></i>
                        </div>
                        <ul class="menuitemconMobi" id="menuitemconMobi">
                            <li class="mobimenu-item"><a href="<?= BASE_URL ?>?mode=client&act=tourdiemden"><i class='bxr  bx-location-alt-2'></i>Các điểm đến </a></li>
                            <li class="mobimenu-item"><a href="<?= BASE_URL ?>?mode=client&act=tourcachoatdong"><i class='bxr  bx-trip'></i>Các hoạt động</a></li>
                            <li class=" mobimenu-item"><a href="<?= BASE_URL ?>?mode=client&act=tourcacloaitouar"><i class='bxr  bx-camping'></i>Các loại tour</a></li>
                        </ul>
                    </li>
                    <li class="mobimenu-item">
                        <a href="<?= BASE_URL ?>?mode=client&act=vechungtoi"><i class='bxr  bx-chevron-right'></i>Về Chúng Tôi </a>
                    </li>
                    <li class="mobimenu-item">
                        <a href="<?= BASE_URL ?>?mode=client&act=blog"> <i class='bxr  bx-chevron-right'></i>Blog</a>
                    </li>
            </div>
            <li class="mobimenu-item mobimenu-item_click">
                <a href=""><i class='bxr  bx-chevron-right'></i>Hỗ Trợ</a>
                <div class="onofmenucon">
                    <i class='bxr  bx-expand-left'></i>
                </div>
                <ul class="menuitemconMobi" id="menuitemconMobi">
                    <li class="mobimenu-item"><a href=""><i class='bxr  bx-help-circle'></i> Trợ Giúp </a></li>
                    <li class="mobimenu-item"><a href="<?= BASE_URL ?>?mode=client&act=lienhe"><i class='bxr  bx-phone-book icon_box'></i>Liên Hệ Chúng Tôi</a></li>
                    <li class=" mobimenu-item"><a href=""><i class='bxr  bx-inbox'></i> Hộp Thư Của Tôi</a></li>
                </ul>
            </li>
            <?php if (isset($_SESSION['username'])): ?>
                <li class="mobimenu-item"><a href="<?= BASE_URL ?>?mode=client&act=TuarDaLuu"><i class='bxr  bx-chevron-right'></i> Đã Lưu </a></li>
            <?php endif ?>
            </ul>
        </div>
    </div>
    <!-- header -->
    <header class="header ">
        <div class="content-header">
            <div class="logo">
                <a href="<?= BASE_URL ?>" class="logo_Logo_Dregner"><img src="<?= IMAGECHUNG ?>Logo_Dregner_DuyDumStorsmaty.png" alt="" class="logo"></a>
            </div>
            <div class="header-nav">
                <nav>
                    <ul class="header-nav_submenu">
                        <li class="menu-item"><a href="<?= BASE_URL ?>?mode=client&act=trangchu">Trang chủ</a></li>
                        <li class="menu-item menu-item_click">
                            <a href="<?= BASE_URL ?>?mode=client&act=tour">Tour<i class='bx bx-chevron-down'></i></a>
                            <ul class="menuitemcon" id="menuitemcon">
                                <li class="itemcon_menu"><a href="<?= BASE_URL ?>?mode=client&act=tourdiemden"><i class='bxr  bx-location-alt-2'></i>Các điểm đến </a></li>
                                <li class="itemcon_menu"><a href="<?= BASE_URL ?>?mode=client&act=tourcachoatdong"><i class='bxr  bx-trip'></i>Các hoạt động</a></li>
                                <li class=" itemcon_menu"><a href="<?= BASE_URL ?>?mode=client&act=tourcacloaitouar"><i class='bxr  bx-camping'></i>Các loại tour</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="<?= BASE_URL ?>?mode=client&act=vechungtoi">Về Chúng Tôi </a></li>
                        <li class="menu-item"><a href="<?= BASE_URL ?>?mode=client&act=blog">Blog</a></li>
                        <li class="menu-item menu-item_click">
                            <a href="">Hỗ Trợ<i class='bxr  bx-chevron-down arrow_box'></i></a>
                            <ul class="menuitemcon" id="menuitemcon">
                                <li class="itemcon_menu"><a href=""><i class='bxr  bx-help-circle'></i> Trợ Giúp </a></li>
                                <li class="itemcon_menu"><a href="<?= BASE_URL ?>?mode=client&act=lienhe"><i class='bxr  bx-phone-book icon_box'></i>Liên Hệ Chúng Tôi</a></li>
                                <li class=" itemcon_menu"><a href=""><i class='bxr  bx-inbox'></i> Hộp Thư Của Tôi</a></li>
                            </ul>
                        </li>
                        <?php if (isset($_SESSION['username'])): ?>
                            <li class="menu-item"><a href="<?= BASE_URL ?>?mode=client&act=clientaccount" data-mode="client" data-ath="TuarDaLuu" class="fetchapiheader" onclick=""> Đã Lưu </a></li>
                        <?php endif ?>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <?php if (isset($_SESSION['username'])): ?>
                    <a href="<?= BASE_URL ?>?mode=client&act=clientaccount" data-mode="client" data-ath="TuarChoThanhToan" class="Giohang fetchapiheader">
                        <div class=" header-right_item "><i class='bxr  bx-shopping-bag-alt'></i>
                            <div class="counst-shoping"><?= count($dataUsershoping) ?></div>
                        </div>
                    </a>
                <?php endif ?>
                <div class="header-right_item timkiem" onclick="upentimkiem()"><i class='bx bx-search-alt-2'></i>Tìm Kiếm</div>
                <div class="header-right_item tab3menu"><i class='bx bx-menu'></i></div>
                <a href="<?= BASE_URL ?>?mode=client&act=showfromlogin" class="HeaderA-fromdangnhap">
                    <?php if (isset($_SESSION['username'])) { ?>
                        <div class="usernamedangnhap">
                            <div class="iconuser">
                                <?php if (!empty($data->image)) { ?>
                                    <img src="<?= $data->image ?>" alt="">
                                <?php } else { ?>
                                    <i class='bxr  bx-camera-portrait'></i>
                                <?php } ?>
                            </div>
                            <span>
                                <?= $data->name ?>
                            </span>
                        </div>
                    <?php } else { ?>
                        <div class=" header-right_item fromdangnhap">
                            <i class='bxr  bxs-user'></i>
                            <span>Đăng Nhập</span>
                        </div>
                    <?php } ?>
                </a>
            </div>
            <div class="UsserAdmin">
                <a onclick="window.open('<?= BASE_URL ?>?mode=admin', '_blank')"><i class='bxr  bx-user-hexagon'></i> </a>
            </div>
        </div>
        <div class="header_retunr">
            <div class="header_retunr_btn"><i class='bx bx-chevrons-up'></i></div>
        </div>
    </header>
    <script src="<?= Js_Client ?>header.js"></script>
</body>

</html>