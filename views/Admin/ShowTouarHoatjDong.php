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
            <a href="<?= BASE_URL ?>?mode=admin&act=quanlyTuarHoatDong" class="back-icon"><i class="fas fa-chevron-left"></i></a>
            <h1>Trình diễn</h1>
            <div class="actions-section">
                <a href="<?= BASE_URL ?>?mode=admin&act=editTuar&id=<?= $dataTuar->id ?>" class="btn btn-edit"><i class="fas fa-pencil-alt"></i> Biên tập</a>
                <a href="<?= BASE_URL ?>?mode=admin&act=deletetouar&id=<?= $dataTuar->id ?>" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Delete</a>
            </div>
        </div>

        <div class="main-content">
            <div class="product-media">
                <div class="product-image">
                    <img src="<?= $dataTuar->image ?>" alt="">
                </div>
            </div>

            <div class="product-details">
                <div class="product-info-grid">
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Tên Touar</span>
                            <span class="value"><?= $dataTuar->title ?></span>
                        </div>
                    </div>
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Các Loại Touar</span>
                            <span class="value"><?= $dataTuar->typeodtouartitle ?></span>
                        </div>
                    </div>
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">các Điểm Đến </span>
                            <span class="value"><?= $dataTuar->destinationtitle ?></span>
                        </div>
                    </div>
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Các Hoạt Động </span>
                            <span class="value"><?= $dataTuar->activitiestitle ?></span>
                        </div>
                    </div>
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Độ khó </span>
                            <span class="value"><?= $dataTuar->difficultyname ?></span>
                        </div>
                    </div>
                    <div class="info-col">
                        <div class="detail-item">
                            <span class="label">Điểm Đến </span>
                            <span class="value"><?= $dataTuar->categories_destinationtitle ?></span>
                        </div>
                    </div>
                </div>

                <div class="detail-item">
                    <span class="label">Time Days</span>
                    <span class="value"><?= $dataTuar->time_days ?></span>
                </div>
                <div class="detail-item">
                    <span class="label">Số Người </span>
                    <span class="value"><?= $dataTuar->soluong_people ?> Người </span>
                </div>

                <div class="detail-item">
                    <span class="label">Giá</span>
                    <span class="value"><?= number_format($dataTuar->price) ?>VND</span>
                </div>

                <div class="detail-item">
                    <span class="label">Description</span>
                    <span class="value"><?= $dataTuar->description ?></span>
                </div>

                <div class="detail-item">
                    <span class="label">Tạo</span>
                    <span class="value"><?= $dataTuar->date_creation ?></span>
                </div>

                <div class="detail-item">
                    <span class="label">Đã cập nhật</span>
                    <span class="value"><?= $dataTuar->date_update ?></span>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= Js_Admin ?>QuanLyTouarHoatDong.js"></script>
</body>

</html>