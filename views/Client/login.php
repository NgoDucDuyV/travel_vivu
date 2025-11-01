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
                <h1 class="font-[700]">Tài khoản</h1>
                <div class="hero-layout-fromdangnhap_content-a">
                    <a href="trangchu.html">Trang chủ</a>
                    <span>/</span>
                    <a href="fromdangnhap.html">Tài khoản</a>
                </div>
            </div>
        </div>
    </section>

    <!-- login -->
    <section class="bg-gray-100 flex items-center justify-center py-12 pb-[160px] px-4 sm:px-6 lg:px-8 sm:px-6 lg:px-8 sm:mb-[100px] sm:min-h-[800px]">
        <div class="max-w-[900px] h-auto w-full bg-white p-8 md:p-10 rounded-xl shadow-sm">

            <h2 class="text-3xl font-normal text-gray-900 mb-8">
                Login
            </h2>

            <div id="errorlogin" class="" role="alert">
                <?php if (isset($_SESSION['success'])): ?>
                    <p class="font-medium text-sm bg-lime-100 border border-lime-400 text-lime-800 px-4 py-3 rounded relative mb-6">
                        <?= htmlspecialchars($_SESSION['success']) ?>
                    </p>
                <?php endif ?>
            </div>
            <form id="formlogin" action="<?= BASE_URL ?>?mode=client&act=login" method="POST" class="space-y-6">

                <div>
                    <label for="login_email" class="block text-sm font-normal text-gray-700 mb-1">
                        Email or username<span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="login_email"
                        name="username"
                        required
                        class="appearance-none relative block w-full px-3 py-2.5 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 **bg-blue-50/70** text-base transition duration-150" />
                </div>

                <div>
                    <label for="login_password" class="block text-sm font-normal text-gray-700 mb-1">
                        Password<span class="text-red-500">*</span>
                    </label>
                    <input
                        type="password"
                        id="login_password"
                        name="password"
                        required
                        class="appearance-none relative block w-full px-3 py-2.5 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 **bg-blue-50/70** text-base transition duration-150" />
                </div>

                <div class="flex flex-row flex-wrap justify-between items-center 
                [&>:first-child]:mr-[10px] [&>:first-child]:mb-[10px] sm:[&>:first-child]:mr-[0px]">
                    <div class="flex items-center justify-between *:mr-2">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="remember_me"
                                name="remember_me"
                                class="h-4 w-4 text-orange-500 focus:ring-orange-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>
                        <a href="<?= BASE_URL ?>?mode=client&act=resetPassword" class="text-sm font-[600] text-gray-600 hover:text-orange-500 hover:underline hover:bg-[#0000]">
                            Forgot Password ?
                        </a>
                    </div>
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember_medky"
                            name="remember_me"
                            class="checkpasswrod h-4 w-4 text-orange-500 focus:ring-orange-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">check password</label>
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full flex justify-center py-2.5 px-4 border border-transparent text-base font-medium rounded-md text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-150 ease-in-out uppercase"
                        data-page="auth"
                        data-action="login">
                        LOG IN
                    </button>
                </div>

                <div class="mt-6 text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="<?= BASE_URL ?>?mode=client&act=showformsigin" class="text-gray-600 font-[800] hover:text-orange-500 hover:bg-[#0000]">
                        Sign up
                    </a>
                </div>

                <div class="optionlogin">
                </div>
            </form>
        </div>
    </section>
    <script>
        const BASE_URL = '<?= BASE_URL ?>';
    </script>
    <script src="<?= Js_Client ?>loginSigin.js"></script>
</body>

</html>