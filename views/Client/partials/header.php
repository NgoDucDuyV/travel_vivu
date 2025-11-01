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
    <!-- header top -->
    <header class="w-full bg-black rounded-none text-white px-4 py-[5px] hidden sm:block">
        <div class="flex flex-row justify-between items-center gap-6 max-w-[var(--maxWidth)] mx-auto w-full">
            <ul class="flex flex-wrap items-center gap-6 text-[16px] max-w-[400px] w-full
            [&>li]:flex [&>li]:items-center [&>li]:gap-2 [&>li]:h-[50px]
            [&>li>a]:text-[#ff681a] [&>li>a]:transition [&>li>a]:h-[2.5em] [&>li>a]:w-[2.5em]
            [&>li>a]:rounded-full [&>li>a]:bg-white [&>li>a]:flex [&>li>a]:items-center [&>li>a]:justify-center
            [&>li>a:hover]:bg-[var(--hover-thea)] [&>li>a:hover]:text-white [&>li>a]:duration-300
            [&>li>a>i]:text-[1.2em]">
                <li>
                    <a href="#">
                        <i class='bx bxs-envelope-open'></i>
                    </a>
                    <span>info@themona.global</span>
                </li>

                <li>
                    <a href="#">
                        <i class='bx bxs-phone-forwarding'></i>
                    </a>
                    <span>1900 636 648</span>
                </li>
            </ul>


            <div class="w-[2.5em] h-[2.5em] text-[1.2em] box-content bg-[var(--hover-thea)] flex items-center justify-center hover:bg-[var(--title-link)] hover:rounded-[80%] transition-all duration-300 cursor-pointer">
                <a class="hover:bg-[#0000]" onclick="window.open('<?= BASE_URL ?>?mode=admin', '_blank')"><i class='bxr  bx-user-hexagon'></i> </a>
            </div>
        </div>
    </header>
    <!-- header bottom -->
    <header class=" bg-white shadow-lg sticky top-0 left-0 w-full headerboxshadow relative z-[50] ">
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
        </div>
        <div class="header_retunr">
            <div class="header_retunr_btn"><i class='bx bx-chevrons-up'></i></div>
        </div>
    </header>
    <script src="<?= Js_Client ?>header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>