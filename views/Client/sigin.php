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

    <section class=" bg-gray-100 flex items-center justify-center py-12 pb-[160px] px-4 sm:px-6 lg:px-8 sm:mb-[100px] sm:min-h-[800px] ">

        <div class="max-w-[900px] w-full bg-white p-8 md:p-10 rounded-xl shadow-sm">

            <h2 class="text-3xl font-normal text-gray-900 mb-8">
                Signup
            </h2>

            <!-- error message -->
            <div id="errorsignup" class="" role="alert">
                <?php if (isset($_SESSION['successsignup'])): ?>
                    <div class="p-3 mb-4 rounded-md bg-green-100 border border-green-400 text-green-700" role="alert">
                        <p class="font-medium text-sm">
                            <?= htmlspecialchars($_SESSION['successsignup']) ?>
                        </p>
                    </div>
                <?php endif ?>
            </div>

            <form id="fromsignup" action="<?= BASE_URL ?>?mode=client&act=sigin" method="POST" class="space-y-6">
                <div>
                    <label for="Username_dky" class="block text-sm font-normal text-gray-700 mb-1">
                        Username<span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        required
                        placeholder="Username"
                        value="" class="appearance-none relative block w-full px-3 py-2.5 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 **bg-blue-50/70** text-base transition duration-150" />
                </div>

                <div>
                    <label for="email" class="block text-sm font-normal text-gray-700 mb-1">
                        Email<span class="text-red-500">*</span>
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        placeholder="Email address"
                        class="appearance-none relative block w-full px-3 py-2.5 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 **bg-white** text-base transition duration-150" />
                </div>

                <div class="group relative">
                    <label for="password_dky" class="block text-sm font-normal text-gray-700 mb-1">
                        Password<span class="text-red-500">*</span>
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        placeholder="Password"
                        class="appearance-none relative block w-full px-3 py-2.5 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 **bg-blue-50/70** text-base transition duration-150" />
                    <div class="absolute z-10 top-full mt-2 w-64 bg-white p-4 rounded-lg shadow-lg border border-gray-200 group-hover:block hidden text-sm">
                        <p class="font-medium text-gray-800 mb-2">
                            Mật khẩu phải có:
                        </p>

                        <ul class="list-disc ml-4 space-y-1 text-gray-600 leading-tight">
                            <li>Ít nhất 10 ký tự</li>
                            <li>1 chữ số, một chữ</li>
                            <li>1 ký tự đặc biệt</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <input type="checkbox" id="remember_medky" name="remember_me" class="checkpasswrod">
                    <label for="remember_me">check password</label>
                </div>
                <div class="pt-2"> <button
                        type="submit"
                        class="w-full flex justify-center py-2.5 px-4 border border-transparent text-base font-medium rounded-md text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-150 ease-in-out uppercase">
                        SIGN UP
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center text-sm">
                Have An Account?
                <a href="<?= BASE_URL ?>?mode=client&act=showfromlogin" class="font-[800] text-gray-600 hover:text-orange-500 hover:bg-[#0000]">
                    Log In
                </a>
            </div>
        </div>
    </section>

    <script>
        const BASE_URL = '<?= BASE_URL ?>';
    </script>
    <script src="<?= Js_Client ?>loginSigin.js"></script>
</body>

</html>