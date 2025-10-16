<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CssAdmin ?>base.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>layout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="header my-box">
        <nav>
            <div class="item_sederbar" onclick="OnSiderBar()">
                <i class='bxr  bx-menu'></i>
            </div>
            <ul class="sub_menu submenuheader">
                <li class="menu_item menu_itemheader"><a href="" onclick="window.open('<?= BASE_URL ?>'); return false;"><i class='bxr  bxs-home-alt'></i> Trang Chủ Toaur </a></li>
                <li class="menu_item menu_itemheader"><a onclick="window.open('https://ngoducduy11092006.github.io/CV_DuyDumStoMaty/', '_blank')"><i class='bx  bxs-cube-alt'></i> Giới Thiệu Cá Nhân </a></li>
                <li class="menu_item menu_itemheader"><a href=""><i class='bx  bxs-chart-stacked-rows'></i> Thông Tin Danh Mục </a></li>
            </ul>
        </nav>
        <div class="header_right">
            <div class="thongbao">
                <a href="">
                    <i class='bxr  bx-bell'></i>
                    <div class="canhbao">
                        <span>1</span>
                    </div>
                </a>
            </div>
            <div class="nameUser">
                <div class="namorrole">
                    <?php if (isset($dataOneUserAdmin)): ?>
                        <p><?= $dataOneUserAdmin->fullname ?></p>
                        <p>(<?= $dataOneUserAdmin->rolesname ?>)</p>
                    <?php endif ?>
                </div>

                <a href="<?= BASE_URL ?>?mode=admin&act=CaidatThongTinUserAdmin&id=<?= $dataOneUserAdmin->id ?>">
                    <div class="avata">
                        <img src="
                    <?php if (isset($dataOneUserAdmin)): ?>
                        <?= $dataOneUserAdmin->image ?>
                    <?php endif ?>
                    " alt="avata">
                    </div>
                </a>
            </div>
            <div class="menu_user">
                <ul class="submenu_user">
                    <li class="menu_item">
                        <a href="<?= BASE_URL ?>?mode=admin&act=logoutAdmin"
                            onclick=" return  confirm('Bạn có chắc muốn đăng xuất?')">
                            <i class='bx bxs-arrow-in-right-square-half'></i> Đăng Xuất
                        </a>
                    </li>
                    <li class="menu_item"><a href="<?= BASE_URL ?>?mode=admin&act=CaidatThongTinUserAdmin&id=<?= $dataOneUserAdmin->id ?>"><i class='bx  bxs-cog'></i> Cài Đặt</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>