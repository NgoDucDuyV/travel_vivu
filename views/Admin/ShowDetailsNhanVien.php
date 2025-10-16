<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trình diễn sản phẩm</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= CssAdmin ?>quanlysTuar.css">
    <link rel="stylesheet" href="<?= CssAdmin ?>base.css">
</head>

<body>

    <div class="container">
        <div class="headershowtouarhoaiong">
            <a href="<?= BASE_URL ?>?mode=admin&act=quanlyUserNhanVien" class="back-icon"><i class="fas fa-chevron-left"></i></a>
            <h1>Trình diễn</h1>
            <div class="actions-section">
                <a href="<?= BASE_URL ?>?mode=admin&act=EditUserNhanVien&id=<?= $datauserAdmin->id ?>" class="btn btn-edit"><i class="fas fa-pencil-alt"></i> Biên tập</a>
                <a href="<?= BASE_URL ?>?mode=admin&act=DeleteUSserNhanVien&id=<?= $datauserAdmin->id ?>" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Delete</a>
            </div>
        </div>

        <div class="main-content">
            <div class="product-media">
                <div class="product-image">
                    <img src="<?= $datauserAdmin->image ?>" alt="Chưa có ảnh">
                </div>
            </div>

            <div class="product-details">
                <div class="product-info-grid">
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Email Đăng Nhập</span>
                            <span class="value"><?= $datauserAdmin->useremail ?></span>
                        </div>
                    </div>
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Mật Khẩu đăng nhập</span>
                            <span class="value"><?= $datauserAdmin->password ?></span>
                        </div>
                    </div>
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Chức Vụ</span>
                            <span class="value"><?= $datauserAdmin->rolesname ?></span>
                        </div>
                    </div>
                </div>

                <div class="detail-item">
                    <span class="label">Tên Hiển Thị</span>
                    <span class="value"><?= $datauserAdmin->fullname ?></span>
                </div>

                <div class="detail-item">
                    <span class="label">Email Liên hệ</span>
                    <span class="value"><?= $datauserAdmin->email ?></span>
                </div>
                <div class="detail-item">
                    <span class="label">Số Điện Thoại</span>
                    <span class="value"><?= $datauserAdmin->sdt ?></span>
                </div>
                <div class="detail-item">
                    <span class="label">Email Liên hệ </span>
                    <span class="value"><?= $datauserAdmin->email ?> </span>
                </div>

                <div class="detail-item">
                    <span class="label">Ngày Tạo</span>
                    <span class="value"><?= $datauserAdmin->date_creation ?></span>
                </div>

                <div class="detail-item">
                    <span class="label">Thời Gian Cập Nhật</span>
                    <span class="value"><?= $datauserAdmin->date_update ?></span>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= Js_Admin ?>QuanLyTouarHoatDong.js"></script>
</body>

</html>