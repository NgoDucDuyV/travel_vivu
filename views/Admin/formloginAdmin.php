<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="<?= CssAdmin ?>base.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="section_login">
        <div class="login .my-box">
            <div class="login_left">
                <h1>Chào mừng</h1>
                <p>đến với DuyDum StorMaty hệ thống quản trị du lịch thông minh và mã nguồn mở hàng đầu thế giới dành cho ứng dụng Node.js của bạn.  DuyDum StorMaty giúp bạn quản lý toàn bộ tour du lịch, khách hàng, lịch trình và điểm đến ở một nơi duy nhất, nhanh chóng và dễ dàng.</p>
                <img src="<?= Image_Admin ?>imgelogin.png" alt="">
            </div>
            <div class="login_right">
                <div class="logo">
                    <img src="<?= Image_Admin ?>logo_black.png" alt="">
                </div>
                <?php if (isset($_SESSION['errorloginAdmin'])): ?>
                    <div class="error">
                        <div class="icon">
                            <i class='bxr  bx-alert-shield'></i>
                        </div>
                        <div class="conten_error">
                            <p>
                                <?php echo $_SESSION['errorloginAdmin']; ?>
                            </p>
                        </div>
                    </div>
                <?php endif ?>
                <form action="<?= BASE_URL ?>?mode=admin&act=loginAdmin" method="post" class="form_login">
                    <div>
                        <label for="useremail">* Email</label>
                        <input type="email" name="useremail" class="useremail" placeholder="Email Đăng Nhập">
                    </div>

                    <div>
                        <label for="password">* password</label>
                        <input type="password" name="password" class="passwordogin" placeholder="Password Đăng Nhập">
                    </div>

                    <div class="btn">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>