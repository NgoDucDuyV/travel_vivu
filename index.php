    <?php
    session_start();
    require_once __DIR__ . '/commons/env.php';
    require_once __DIR__ . '/commons/function.php';

    require_once __DIR__ . "/models/Blog.php";
    require_once __DIR__ . "/models/Categories.php";
    require_once __DIR__ . "/models/Comments.php";
    require_once __DIR__ . "/models/Tags.php";
    require_once __DIR__ . "/models/User.php";
    require_once __DIR__ . "/models/TuarModel.php";


    require_once __DIR__ . "/controllers/BlogController.php";
    require_once __DIR__ . "/controllers/TuarController.php";
    require_once __DIR__ . "/controllers/UserLoginSiginController.php";
    require_once __DIR__ . "/controllers/TrangchuController.php";
    require_once __DIR__ . "/controllers/VechungtoiController.php";
    require_once __DIR__ . "/controllers/HoTro.php";
    require_once __DIR__ . "/controllers/AdminController.php";
    require_once __DIR__ . "/controllers/SiderbarHeaderFooterAdmin.php";
    require_once __DIR__ . "/controllers/AccountInformationController.php";


    $mode = isset($_GET['mode']) ? $_GET['mode'] : 'client';
    ob_start();
    switch ($mode) {
        case 'client': {
                require_once Views_Router . "client.php";
                break;
            }
        case 'admin': {
                require_once Views_Router . "admin.php";
                break;
            }
        default:
            require_once Views_Router . "client.php";
            break;
    }
    $content_views =  ob_get_clean();
    ?>
    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ViVuD - Website Đặt Tour Du Lịch</title>
        <!-- CSS gốc của bạn (luôn load TRƯỚC Tailwind) -->
        <link rel="stylesheet" href="public/css/style.css" />

        <!-- Cấu hình Tailwind (tắt reset để không ảnh hưởng CSS gốc) -->
        <script>
            tailwind = {
                config: {
                    corePlugins: {
                        preflight: false, // Ngăn Tailwind reset CSS mặc định
                    },
                    theme: {
                        extend: {
                            fontFamily: {
                                title: ['"Poppins"', 'Segoe UI', 'Roboto', 'sans-serif'],
                                body: ['"Open Sans"', 'Segoe UI', 'Roboto', 'sans-serif'],
                            },
                        },
                    },
                },
            };
        </script>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Google Fonts để đẹp hơn -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Open+Sans:wght@400;500&display=swap"
            rel="stylesheet" />

        <!-- Favicon (nếu có) -->
        <link rel="icon" href="public/img/logo.png" type="image/png" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
        <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    </head>

    <body class="font-body text-[16px] bg-white text-gray-800">
        <?php echo $content_views; ?>
    </body>

    </html>