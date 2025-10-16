<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách đã lưu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>TouarDaluu.css">
</head>

<body>
    <div class="favorite-list-container container_users">
        <h1>Danh sách Mục Đã Lưu</h1>
        <p>Nơi lưu giữ những sản phẩm yêu thích của bạn!</p>

        <div class="booking-tabs">
            <a href="#" class="tab-link active" data-tab="active-booking">Touar Yêu Thích </a>
            <a href="#" class="tab-link" data-tab="recent-booking">Danh Sách Đã lưu</a>
            <a href="#" class="tab-link" data-tab="history-booking">Bộ sưu tập</a>
            <div class="tab-underline"></div>
        </div>
        <?php foreach ($dataTuarDaLuu as $value) { ?>
            <a href="<?= BASE_URL ?>?page=tour_details&id=<?= $value->id ?>" class="Linkfavorite-item">
                <div class="favorite-item">
                    <div class="image-container">
                        <img src="<?= $value->image ?>" alt="Vince Hotel Pratunam" class="item-image">
                    </div>
                    <div class="item-content">
                        <h3>Touar Du Lịch </h3>
                        <h2><?= $value->title ?></h2>
                        <div class="item-details">
                            <span class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span>9 / 10</span>
                            <span>(111)</span>
                            <span class="location"><i class="fa-solid fa-location-dot"></i>Ratchathewi, Bangkok</span>
                        </div>
                        <div class="item-price"><?= number_format($value->price) ?> VND (1 khách, 1 phòng, 1 đêm)</div>
                    </div>
                    <a href="<?= BASE_URL ?>?mode=client&act=XoaTouarlove&tuar_id=<?= $value->id ?>"
                        onclick="return confirm('Bạn có muốn xóa khỏi yêu thích ')">
                        <i class="fa-solid fa-bookmark remove-icon"></i>
                    </a>
                </div>
            </a>
        <?php } ?>
    </div>
    <script src="<?= Js_Client ?>touarDaluu.js"></script>
</body>

</html>