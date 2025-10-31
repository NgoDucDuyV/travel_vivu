    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Đặt Tour</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>usertab.css">
        <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
        <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <section class="containerUser">
            <div class="content container">
                <div class="headerainerUser">
                    <div class="user-info">
                        <div class="user-avatar" style="position: relative; z-index: 100;">
                            <?php if (!empty($dataUser->image)) { ?>
                                <img src="<?= $dataUser->image ?>" alt="<?= $dataUser->username ?>" class="user-avatar_img">
                            <?php } else { ?>
                                <i class='bxr  bxs-user'></i>
                            <?php } ?>
                            <input type="file" id="avatarInput" name="image"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;" onclick="return confirm('Bạn Có Muốn Đổi Ảnh!')">
                        </div>
                        <h2 class="user-name">Xin chào <span class="text-[16px] font-[600]"><?php if (isset($_SESSION['username'])): ?><?= $dataUser->username ?><?php endif ?> !</span></h2>
                    </div>
                    <a href="<?= BASE_URL ?>?mode=client&act=logout"
                        onclick="return confirm('BẠN CÓ MUỐN ĐĂNG XUẤT KHÔNG')">
                        <button class="logout-button">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Đăng xuất
                        </button>
                    </a>
                </div>
                <div class="main-content">
                    <aside class="sidebar">
                        <nav class="sidebar-nav">
                            <ul>
                                <li class="menu_itemclientaccount">
                                    <a href="#" data-mode="client" data-act="TuarDaLuu" class="dattuar"><i class='bxr  bx-folder-heart'></i> Đã Lưu</a>
                                </li>
                                <li class="menu_itemclientaccount">
                                    <a href="#" data-mode="client" data-act="TuarChoThanhToan" class="dattuar"><i class="fa-solid fa-clipboard-list"></i>Tour Chờ Thanh Toán</a>
                                </li>
                                <li class="menu_itemclientaccount">
                                    <a href="#" data-mode="client" data-act="TuarChoThanhToan" class="dattuar"><i class='bxr  bx-history'></i> Tour - Thanh Toán</a>
                                </li>
                                <li class="menu_itemclientaccount">
                                    <a href="#" data-mode="client" data-act="diachi" class="diachi"><i class="fa-solid fa-location-dot"></i> Địa chỉ</a>
                                </li>
                                <li class="menu_itemclientaccount">
                                    <a href="<?= BASE_URL ?>?mode=client&act=taikhoan" data-mode="client" data-act="taikhoan" class="taikhoan"><i class="fa-solid fa-gear"></i> Tài khoản</a>
                                </li>


                                <li class="btndemo" id="btnDemoMode">
                                    <button class="py-3 px-6 bg-blue-500 text-white rounded-md">Demo Mode</button>
                                </li>
                            </ul>
                        </nav>
                    </aside>
                    <div class=" content_user">
                        <!-- <?= require_once Views_Client . "partials/loadText.php" ?> -->
                        <?php if ($view_file !== null) {
                            include $view_file;
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        <script src="<?= Js_Client ?>SiderBarUser.js"></script>
    </body>

    </html>