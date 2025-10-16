<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trips</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>TuarTrangchu.css">
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="main-container">
        <aside class="sidebar">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h2>Điều kiện lọc</h2>
                <a href="#" class="clear-filters">Xóa tất cả</a>
            </div>

            <div class="filter-group">
                <div class="filter-group-header">
                    <h3>Điểm đến</h3>
                    <i class="fa-solid fa-chevron-up"></i>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="filter-group-content">
                    <div class="filter-group-content-inner">
                        <?php foreach ($dataDestination as $value): ?>
                            <div class="filter-option">
                                <label>
                                    <input type="checkbox" name="destination" checked>
                                    <span><?= $value->title ?></span>
                                    <span><?= $value->soluong_tuar ?></span>
                                </label>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a href="#" class="show-all-filters">Hiển thị tất cả 4 <i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-group-header">
                    <h3>Giá</h3>
                    <i class="fa-solid fa-chevron-up"></i>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="filter-group-content">
                    <div class="range-slider-container">
                        <input type="range" class="range-slider" min="0" max="19999000" value="50">
                        <div class="price-range">
                            <span class="min-price">₫ 0</span>
                            <span class="max-price">₫ 19,999,000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-group-header">
                    <h3>Thời gian</h3>
                    <i class="fa-solid fa-chevron-up"></i>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="filter-group-content">
                    <div class="range-slider-container">
                        <input type="range" class="range-slider" min="0" max="8" value="4">
                        <div class="price-range">
                            <span class="min-price">0 ngày</span>
                            <span class="max-price">8 ngày</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-group-header">
                    <h3>Các hoạt động</h3>
                    <i class="fa-solid fa-chevron-up"></i>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="filter-group-content">
                    <div class="filter-group-content-inner">
                        <?php foreach ($dataActivities as  $value): ?>
                            <div class="filter-option">
                                <label>
                                    <input type="checkbox" name="activity">
                                    <span><?= $value->title ?></span>
                                    <span><?= $value->soluong_tour ?></span>
                                </label>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a href="#" class="show-all-filters">Hiển thị tất cả 4 <i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-group-header">
                    <h3>Loại chuyến đi</h3>
                    <i class="fa-solid fa-chevron-up"></i>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="filter-group-content">
                    <div class="filter-group-content-inner">
                        <?php foreach ($dataTypeodtouar as $value): ?>
                            <div class="filter-option">
                                <label>
                                    <input type="checkbox" name="trip-type">
                                    <span><?= $value->title ?></span>
                                    <span><?= $value->soluong_tour ?></span>
                                </label>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a href="#" class="show-all-filters">Hiển thị tất cả 4 <i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>

            <div class="filter-group">
                <div class="filter-group-header">
                    <h3>Độ khó khăn</h3>
                    <i class="fa-solid fa-chevron-up"></i>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="filter-group-content">
                    <?php foreach ($dataDifficulty as $value): ?>
                        <div class="filter-option">
                            <label>
                                <input type="checkbox" name="difficulty">
                                <span><?= $value->difficulty_name ?></span>
                                <span><?= $value->soluong_tour ?></span>
                            </label>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </aside>

        <main class="content">
            <div class="content-header">
                <h1>Trips</h1>
                <div class="sort-by-dropdown">
                    <div class="dropdown-header">
                        Sắp xếp: <span class="selected-option">Thấp đến cao</span>
                        <i class="fa-solid fa-chevron-up toggle-icon"></i>
                    </div>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item highlighted">Mới nhất</a>
                        <a href="#" class="dropdown-item highlighted">Đánh giá nhiều nhất</a>
                        <div class="dropdown-group">
                            <span class="group-title">Giá</span>
                            <a href="#" class="dropdown-item active highlighted">Thấp đến cao</a>
                            <a href="#" class="dropdown-item">Cao đến thấp</a>
                        </div>
                        <div class="dropdown-group">
                            <span class="group-title">Ngày</span>
                            <a href="#" class="dropdown-item">Thấp đến cao</a>
                            <a href="#" class="dropdown-item">Cao đến thấp</a>
                        </div>
                        <div class="dropdown-group">
                            <span class="group-title">Tên</span>
                            <a href="#" class="dropdown-item">a - z</a>
                            <a href="#" class="dropdown-item">z - a</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="trip-list">
                <?php foreach ($dataTuar as $value) { ?>
                    <div class="trip-card">
                        <div class="trip-card-top-section">
                            <div class="trip-card-image-container">
                                <img src="<?= $value->image ?>" alt="<?= $value->title ?>" class="trip-card-image">
                                <span class="badge">Đặc sắc</span>
                                <?php
                                $Viewslove = false;
                                if (isset($dataUserSaved_UserId)):
                                    foreach ($dataUserSaved_UserId as $valueUserSaved_UserId) {
                                        if ($valueUserSaved_UserId->tuar_id == $value->id) {
                                            $Viewslove = true;
                                        }
                                    }
                                endif;
                                ?>
                                <?php if (!isset($_SESSION['username'])) { ?>
                                    <a href="<?= BASE_URL ?><?= ThemTouarYeuThich ?>&tuar_id=<?= $value->id ?>" class="heart-icon_no"
                                        onclick="return confirm('bạn có muốn thêm vào yêu thích ')">
                                        <i class="fa-solid fa-heart heart-icon heart-icon_no "></i>
                                    </a>
                                <?php } ?>

                                <?php if (isset($_SESSION['username'])) { ?>
                                    <?php if ($Viewslove): ?>
                                        <a href="<?= BASE_URL ?><?= XoaYeuThich ?>&tuar_id=<?= $value->id ?>&src=<?= BASE_URL_Touar ?>" class="heart-icon_yes"
                                            onclick="return confirm('Bạn có muốn xóa khỏi yêu thích ')">
                                            <i class="fa-solid fa-heart heart-icon heart-icon_yes "></i>
                                        </a>
                                    <?php endif ?>
                                    <?php if (!$Viewslove) : ?>
                                        <a href="<?= BASE_URL ?><?= ThemTouarYeuThich ?>&tuar_id=<?= $value->id ?>" class="heart-icon_no"
                                            onclick="return confirm('bạn có muốn thêm vào yêu thích ')">
                                            <i class="fa-solid fa-heart heart-icon heart-icon_no "></i>
                                        </a>
                                    <?php endif ?>
                                <?php } ?>
                            </div>
                            <div class="trip-card-content">
                                <div class="trip-content-main">
                                    <div class="trip-info-left">
                                        <h3><?= $value->title ?></h3>
                                        <div class="trip-details">
                                            <div class="trip-details-item"><i class="fa-solid fa-map-marker-alt"></i><?= $value->destinationtitle ?></span></div>
                                            <div class="trip-details-item"><i class="fa-solid fa-moon"></i><span><?= $value->time_days ?> Ngày</span></div>
                                            <div class="trip-details-item"><i class="fa-solid fa-people-group"></i><span>1-<?= $value->soluong_people ?> Người</span></div>
                                            <div class="trip-details-item"><i class="fa-solid fa-chart-line"></i><span><?= $value->difficultyname ?></span></div>
                                        </div>
                                        <?php
                                        // Hiển Thị Nội dung không quá 10 từ
                                        $description = strip_tags($value->description);
                                        $description = preg_replace('/\s+/', ' ', $description);
                                        $description = trim($description);

                                        $words = explode(' ', $description);
                                        $shortDesc = implode(' ', array_slice($words, 0, 10));

                                        if (count($words) > 10) {
                                            $shortDesc .= '...';
                                        }
                                        ?>
                                        <p><?= $shortDesc ?></p>

                                    </div>
                                    <div class="trip-price-details">
                                        <span class="trip-price"><?= number_format($value->price) ?> VND</span>
                                        <span class="availability-info">Chuyến khởi hành tiếp theo</span>
                                        <div class="booking-schedule">
                                            <span class="booking-schedule-item"><i class="fa-solid fa-check"></i>Thứ 06</span>
                                            <span class="booking-schedule-item"><i class="fa-solid fa-check"></i>Thứ 07</span>
                                            <span class="booking-schedule-item"><i class="fa-solid fa-check"></i>Thứ 08</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trip-card-footer">
                            <div class="months-available">
                                <span class="month-label">Có sẵn quanh năm:</span>
                                <span class="month-item selected">Th1</span>
                                <span class="month-item">Th2</span>
                                <span class="month-item">Th3</span>
                                <span class="month-item">Th4</span>
                                <span class="month-item">Th5</span>
                                <span class="month-item">Th6</span>
                                <span class="month-item selected">Th7</span>
                                <span class="month-item">Th8</span>
                                <span class="month-item">Th9</span>
                                <span class="month-item">Th10</span>
                                <span class="month-item">Th11</span>
                                <span class="month-item">Th12</span>
                            </div>
                            <a href="<?= BASE_URL ?>?mode=client&act=tour_details&id=<?= $value->id ?>" class="btn-booking">Xem chuyến đi</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>

    <script src="<?= Js_Client ?>TrangchuTouar.js"></script>

</body>

</html>