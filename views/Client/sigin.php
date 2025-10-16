<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout </title>
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>loginSigin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <!--hero-layout-fromdangnhap  -->
    <section class="hero-layout-fromdangnhap">
        <img src="<?= IMAGECHUNG ?>breadcumb-bg-form-dangnhap.jpg" alt="">
        <div class="content hero-layout-fromdangnhap">
            <div class="hero-layout-fromdangnhap_content">
                <h1>Tài khoản</h1>
                <div class="hero-layout-fromdangnhap_content-a">
                    <a href="trangchu.html">Trang chủ</a>
                    <span>/</span>
                    <a href="fromdangnhap.html">Sigin</a>
                </div>
            </div>
        </div>
    </section>

    <section class="login">
        <div class="content login">
            <form action="<?= BASE_URL ?>?mode=client&act=sigin" method="POST" class="login-form login" id="loginform" style="height: 750px;">
                <h2>Đăng ký tài khoản</h2>
                <?php if (!empty($_SESSION['errorsigin'])) echo '<div class="error" style="color:red;"> <i class="bxr  bx-alert-shield"></i>' . htmlspecialchars($_SESSION['errorsigin']) . '</div>'; ?>

                <div class="rectionSigin">
                    <label>Họ Và Tên:</label>
                    <input type="text" id="name" name="name" required />
                </div>

                <div class="rectionSigin">
                    <label>Email Người Dùng:</label>
                    <input type="email" id="email" name="email" required />
                </div>

                <div class="rectionSigin Hovernote" id="Hovernote">
                    <label>Tên đăng nhập:</label>
                    <input type="text" id="Username_dky" name="username" required />
                    <div class="note">
                        Tên Đăng Nhập Phải có:
                        <ul>
                            <li>Ít nhất 8 ký tự</li>
                            <li>1 chữ hoa Đầu</li>
                            <li>1 chữ số, một chữ</li>
                        </ul>
                    </div>
                </div>

                <div class="rectionSigin Hovernote" id="Hovernote">
                    <label>Mật khẩu:</label>
                    <input type="password" id="password_dky" name="password" required />
                    <div class="note">
                        Mật khẩu phải có:
                        <ul>
                            <li>Ít nhất 10 ký tự</li>
                            <li>1 chữ hoa Đầu</li>
                            <li>1 chữ số, một chữ</li>
                            <li>1 ký tự đặc biệt</li>
                        </ul>
                    </div>
                </div>
                <div class="rectionSigin">
                    <label>Nhập lại mật khẩu:</label>
                    <input type="password" id="passwordconform_dky" name="confirm_password" required />
                </div>

                <div>
                    <input type="checkbox" id="remember_medky" name="remember_me" class="checkpasswrod">
                    <label for="remember_me">check password</label>
                </div>

                <p>Đã có tài khoản? <a href="<?= BASE_URL ?>?mode=client&act=showfromlogin">Đăng nhập</a></p>
                <button type="submit">Đăng ký</button>
            </form>

        </div>
    </section>

    <script src="<?= Js_Client ?>loginSigin.js"></script>
</body>

</html>