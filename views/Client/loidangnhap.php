<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lỗi 404 - Không tìm thấy trang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Thiết lập cơ bản cho toàn bộ trang */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .container {
            background: #fff;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .error-code {
            font-size: 10rem;
            font-weight: 700;
            color: #ff1900;
            margin: 0;
            line-height: 1;
        }

        .error-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ff8c00;
            margin: 10px 0;
        }

        .error-message,
        .login-message {
            font-size: 1.2rem;
            color: #666;
            margin: 20px 0;
        }

        .login-button {
            display: inline-block;
            background-color: #ff6f00;
            color: #fff;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 700;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .login-button:hover {
            background-color: #00ffff;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="error-code">404</h1>
        <h2 class="error-title">Không tìm thấy trang</h2>
        <p class="error-message">
            Trang bạn đang tìm kiếm không tồn tại hoặc bạn không có quyền truy cập.
        </p>
        <p class="login-message">
            Vui lòng đăng nhập để tiếp tục.
        </p>
        <a href="<?= BASE_URL ?><?= $src ?>" class="login-button">Đăng nhập ngay</a>
    </div>
</body>
<script>
    setTimeout(function() {
        window.location.href = '<?= BASE_URL ?><?= $src ?>';
    }, 6000);
</script>

</html>