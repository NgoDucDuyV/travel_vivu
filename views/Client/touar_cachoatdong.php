<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện Địa điểm du lịch</title>
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
<style>


</style>

<body>

    <section class="destinations-section">
        <div class="container">
            <div class="destinations-grid">
                <?php foreach ($dataActivities as $value) { ?>
                    <div class="location-card">
                        <div class="card-image">
                            <div class="location-card_hover">
                                <a href="<?= BASE_URL ?>?page=tour" class="location-card_hoverbtn"> Views </a>
                            </div>
                            <img src="<?= $value->image ?>" alt="Annapurna">
                        </div>
                        <div class="beautifulstreet-bottom_sanpham-bottom">
                            <div class="beautifulstreet-bottom_sanpham-bottom_link">
                                <a href="#">
                                    <h6><?= $value->title ?></h6>
                                </a>
                                <span>(<?= $value->soluong_tour ?>Trips)</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>

</html>