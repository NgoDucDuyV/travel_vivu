<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>loginSigin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
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
                    <a href="fromdangnhap.html">Tài khoản</a>
                </div>
            </div>
        </div>
    </section>

    <!-- login -->
    <section class="login">
        <div class="content login">
            <form action="<?= BASE_URL ?>?mode=client&act=login" method="POST" class="login-form login" id="loginform">
                <h2>Đăng nhập</h2>
                <?php if (isset($_SESSION['errorlogin']) || isset($_SESSION['success'])): ?>
                    <div class="error">
                        <div class="icon">
                            <i class='bxr  bx-alert-shield'></i>
                        </div>
                        <div class="conten_error">
                            <p>
                                <?php if (isset($_SESSION['errorlogin'])): echo $_SESSION['errorlogin'];
                                endif ?>
                                <?php if (isset($_SESSION['success'])): echo $_SESSION['success'];
                                endif ?>
                            </p>
                        </div>
                    </div>
                <?php endif ?>
                <div class="rectionSigin">
                    <label>Tên đăng nhập:</label>
                    <input type="text" id="login_email" name="username" />
                </div>

                <div class="rectionSigin">
                    <label>Mật khẩu:</label>
                    <input type="password" id="login_password" name="password" />
                </div>
                <div class="checkbox">
                    <div>
                        <input type="checkbox" id="remember_me" name="remember_me" class="checkpasswrod">
                        <label for="remember_me">Check password</label>
                    </div>
                    <a href="<?= BASE_URL ?>?mode=client&act=resetPassword">
                        <p href="#">Forgot Password?</p>
                    </a>
                </div>
                <p>Chưa có tài khoản? <a href="<?= BASE_URL ?>?mode=client&act=showformsigin">Đăng ký</a></p>
                <button type="submit" class="Submitbtn" data-page="auth" data-action="login">Đăng nhập</button>

                <div class="optionlogin">
                    <div class="optionlogin-item"><a href=""></a></div>
                    <div class="optionlogin-item"><a href=""></a></div>
                </div>
            </form>
        </div>
    </section>
    <script src="<?= Js_Client ?>loginSigin.js"></script>
</body>

</html>