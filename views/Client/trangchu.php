<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trangchu </title>
    <link rel="stylesheet" href="<?= CSS ?>css.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <img src="<?= Image_Chung ?>banner-bg-1.png" class="imgbackgraubody" alt="">
    <!-- hero layout -->
    <section class="hero-layout">
        <div class="content hero-layout">
            <div class="hero-layout_top">
                <div class="hero-style2">
                    <div class="hero-content *:text-shadow-lg">
                        <span class="hero-subtitle font-[600]">Lên đường ngay</span>
                        <h2 class="hero-title font-[800]">Vẻ đẹp thiên nhiên</h2>
                        <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget
                            consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia convallis at tellus.</p>
                        <a href="" class="hero-btn style">Đặt vé ngay</a>
                    </div>
                </div>
                <div class="hero-img">
                    <div class="img1 hero-img_box" id="hero_img1">
                        <img class="image-hero_item" src="<?= IMAGECHUNG ?>hero-img1.jpg" alt="">
                        <img class="image-hero_item" src="<?= IMAGECHUNG ?>banner-img-2-1hero-layout.jpg" alt="">
                        <img class="image-hero_item" src="<?= IMAGECHUNG ?>banner-img-3-1hero-layout.jpg" alt="">
                    </div>

                    <div class="img2 hero-img_box" id="hero_img2">
                        <img class="image-hero_item" src="<?= IMAGECHUNG ?>hero-img2.jpg" alt="">
                        <img class="image-hero_item" src="<?= IMAGECHUNG ?>banner-img-2-2hero-layout.jpg" alt="">
                        <img class="image-hero_item" src="<?= IMAGECHUNG ?>banner-img-3-2hero-layout.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="hero-style1">
                <div class="hero-slide">
                    <button class="btnhero" id="btn1hero" onclick="layout(1, this)" data-layout="1" class="hero-slide_btn1"><span>1</span></button>
                    <button class="btnhero" id="btn2hero" onclick="layout(2, this)" data-layout="1" class="hero-slide_btn2"><span>2</span></button>
                    <button class="btnhero" id="btn3hero" onclick="layout(3, this)" data-layout="1" class="hero-slide_btn3"><span>3</span></button>
                </div>
            </div>
        </div>

        <!-- container -->
        <section class="container mx-auto">
            <div class="content container">
                <div class="elementor-from">
                    <form action="" class="from-search">
                        <div class="from-search_location">
                            <span class="icon-location">
                                <i class='bx bx-location-plus'></i>
                            </span>
                            <input list="options" class="wpte__input" placeholder="Điểm đến">
                            <datalist id="options">
                                <option value="Annapurna">
                                <option value="Bhutan">
                                <option value="Colombo">
                                <option value="England">
                                <option value="Everest">
                                <option value="France">
                                <option value="India">
                            </datalist>
                        </div>
                        <div class="from-search_active">
                            <span class="icon-active">
                                <i class='bx bxs-taxi'></i>
                            </span>
                            <input list="Boating" class="Boating-input" placeholder="City Tour  ">
                            <datalist id="Boating">
                                <option value="Boating">
                                <option value="City Tour">
                                <option value="Cycling">
                                <option value="Hiking">
                                <option value="Jungle Safari">
                                <option value="Peak Climbing">
                                <option value="Rafting">
                                <option value="Skiing">
                                <option value="Trekking">
                            </datalist>
                        </div>
                        <div class="from-search_day" style="position: relative;" id="fromsearch_day" onclick="fromsearch_day()">
                            <span class="icon-day">
                                <i class="bx bx-calendar"></i>
                            </span>
                            <p class="day__input">0 Ngày - <span id="rangendayvale">8</span> Ngày</p>
                            <div class="chevronday" id="chevronday">
                                <i class='bx bx-chevron-up' id="chevronup"></i>
                                <i class='bx bx-chevron-down' id="chevrondown"></i>
                            </div>
                            <div class="range" id="range" style="position: absolute; top: 50px;right: 0px; width: 100%;">
                                <input type="range" id="rangenday" min="0" max="8" value="8" style=" width: 100%;">
                            </div>
                        </div>
                        <div class="from-search_price" style="position: relative;" onclick="fromsearch_pre()">
                            <span class="icon-price">
                                <i class='bx bx-money-withdraw'></i>
                            </span>
                            <p class="price__input" id="price__input">0đ - <span id="rangenprevale">19.999.000</span>đ</p>
                            <div class="chevronprice" id="chevronprice">
                                <i class='bx bx-chevron-up' id="chevronupprice"></i>
                                <i class='bx bx-chevron-down' id="chevrondownprice"></i>
                            </div>
                            <div class="range" id="range2" style="position: absolute; top: 50px;right: 0px; width: 100%;">
                                <input type="range" id="rangenpre" min="0" max="19999000" value="19999000" style=" width: 100%;">
                            </div>
                        </div>
                        <a href="" class="btn-search">Tìm Kiếm </a>
                    </form>
                </div>
            </div>
        </section>

    </section>
    <!-- Essential-Tips -->
    <section class="Essential-Tips">
        <img src="<?= Image_Chung ?>Essential-Tips-top-left.png" id="image" class="Essential-Tips_imgtop" alt="">
        <img src="<?= Image_Chung ?>Essential-Tips-bottom-right.png" id="image2" class="Essential-Tips_imgbottom" alt="">
        <div class="content Essential-Tips">
            <img src="<?= Image_Chung ?>Plane-topmay_bayspham.png" class="maybayjs" alt="">
            <div class="Essential-Tips_1">
                <div class="Essential-Tips1_text">
                    <span class="Essential_span">Mẹo Vặt Cần Thiết</span>
                    <h1 class="Essential_h1">Những Mẹo Tuyệt Vời Làm Cho Chuyến Đi Của Bạn</h1>
                </div>
            </div>
            <div class="Essential-Tips_2">
                <div class="Essential-Tips_item">
                    <div class="Essential-Tipsimg">
                        <img src="<?= IMAGECHUNG ?>Essential-Tips2_img-content.jpg" alt="">
                        <a href="" class="canva-link">
                            <i class='bx bx-purchase-tag-alt'></i>
                            CanVa
                        </a>
                    </div>
                    <div class="Essential-Tipsblog">
                        <img src="<?= Image_Chung ?>blog-bg.png" alt="">
                        <a href="" class="blog-datedate">
                            <i class='bx bx-calendar'></i>
                            12 Tháng Mười Hai, 2023
                        </a>
                        <h2 class="blog-title">10 Sun Hats For Beach Days, Long Hikes, And</h2>
                        <p class="blog-text">Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit</p>
                        <a href="<?= BASE_URL ?>?page=blog" class="blog-btn_style">Đọc thêm</a>
                    </div>
                </div>
                <div class="Essential-Tips_item">
                    <div class="Essential-Tipsimg ">
                        <img src="<?= IMAGECHUNG ?>Essential-Tips3_img-content.jpg" alt="">
                        <a href="" class="canva-link">
                            <i class='bx bx-purchase-tag-alt'></i>
                            CanVa
                        </a>
                    </div>
                    <div class="Essential-Tipsblog ">
                        <img src="<?= Image_Chung ?>blog-bg.png" alt="">
                        <a href="" class="blog-datedate">
                            <i class='bx bx-calendar'></i>
                            12 Tháng Mười Hai, 2023
                        </a>
                        <h2 class="blog-title">Cambodia In August: Island Hopping And Weather Tips</h2>
                        <p class="blog-text">Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit</p>
                        <a href="<?= BASE_URL ?>?page=blog" class="blog-btn_style">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--service-package-->
    <section class="service-package" style="position: relative; " style=" background-image: url('<?= IMAGECHUNG ?>Bg-sp.png');">
        <img src="<?= IMAGECHUNG ?>Plane-topmay_bayspham.png" alt="" class="setinterval_maybay" id="setinterval_maybay" style="position: absolute; left: 5%; width: 300px;">
        <img src="<?= IMAGECHUNG ?>Essential-Tips-top-left.png" id="image" class="Essential-Tips_imgtop-package" alt="" style="position: absolute;top: 15%; right: 5%; ">
        <img src="<?= IMAGECHUNG ?>Essential-Tips-bottom-right.png" id="image2" class="Essential-Tips_imgbottom" alt="">
        <div class="content service-package">
            <button id="btnleft_service" class="service-packageBtn"><i class='bx bx-chevron-left'></i></button>
            <button id="btnright_service" class="service-packageBtn"><i class='bx bx-chevron-right'></i></button>
            <div class="service-package_1">
                <div>
                    <span class="service-package_1_1-content-text ">Chuyến Tham Quan Tuyệt Vời</span>
                    <h2 class="service-package_1_2-content-text ">Gói du lịch tốt nhất (Nước Ngoài)</h2>
                    <p class="service-package_1_3-content-text ">Gói du lịch tốt nhất của chúng tôi đã được thiết kế đặc biệt để mang đến cho bạn trải nghiệm tuyệt vời nhất.</p>
                </div>
            </div>
            <div class="service-package_2">
                <?php foreach ($dataTuar as $value) { ?>
                    <?php if ($value->price >= 1000000 && $value->categories_destination_id == 2): ?>
                        <div class="service-package2-sanpam">
                            <div class="service-package2-sanpam_img">
                                <img src="<?= $value->image ?>" alt="" class="service-package2-sanpam_img1">
                            </div>
                            <div class="service-package2-sanpam_input-text">
                                <div class="product-name">
                                    <a href="" class="product-name_a">
                                        <h2><?= $value->title ?></h2>
                                    </a>
                                </div>
                                <div class="service-package2-sanpam_input-text_wap">
                                    <div class="wap-left">
                                        <div class="wap-left_position">
                                            <div class="link-position">
                                                <a href="" class="link-position_1"><i class='bxr  bx-location-alt-2'></i><span><?= $value->destinationtitle ?></span></a>
                                                <a href="" class="link-position_1"><i class='bxr  bx-trip'></i><span><?= $value->activitiestitle ?></span></a>
                                                <a href="" class="link-position_1"><i class='bxr  bx-camping'></i><span><?= $value->typeodtouartitle ?></span></a>
                                            </div>
                                        </div>
                                        <div class="wap-left_date">
                                            <i class="bx bx-calendar"></i>
                                            <span class="wap-left_date-spandate">
                                                <?= $value->time_days ?> Ngày - <?= $value->time_days - 1  ?> Đêm
                                            </span>
                                        </div>
                                    </div>
                                    <div class="wap-right">
                                        <span class="budget"><?= number_format($value->price) ?></span>
                                        <span class="budget$">đ</span>
                                    </div>
                                </div>
                                <div class="service-package2-sanpam_input-text_link">
                                    <a href="<?= BASE_URL ?>?mode=client&act=tour_details&id=<?= $value->id ?>">Xem Chi Tiết </a>
                                </div>
                            </div>
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
                                <a href="<?= BASE_URL ?><?= ThemTouarYeuThich ?>&tuar_id=<?= $value->id ?>"
                                    onclick="return confirm('bạn có muốn thêm vào yêu thích ')">
                                    <i class='bxr  bxs-heart heart-icon_no'></i>
                                </a>
                            <?php } ?>
                            <?php if (isset($_SESSION['username'])) { ?>
                                <?php if ($Viewslove): ?>
                                    <a href="<?= BASE_URL ?><?= XoaYeuThich ?>&tuar_id=<?= $value->id ?>"
                                        onclick="return confirm('Bạn có muốn xóa khỏi yêu thích ')">
                                        <i class='bxr  bxs-heart heart-icon_yes'></i>
                                    </a>
                                <?php endif ?>
                                <?php if (!$Viewslove) : ?>
                                    <a href="<?= BASE_URL ?><?= ThemTouarYeuThich ?>&tuar_id=<?= $value->id ?>"
                                        onclick="return confirm('bạn có muốn thêm vào yêu thích ')">
                                        <i class='bxr  bxs-heart heart-icon_no'></i>
                                    </a>
                                <?php endif ?>
                            <?php } ?>
                        </div>
                    <?php endif ?>
                <?php } ?>
            </div>
            <div class="service-package_2-link">
                <a a href="<?= BASE_URL ?>?page=tour" class="service-package_2-link">Đọc Thêm </a>
            </div>
        </div>
    </section>


    <!-- Gói Du lịch trong Nước -->
    <!-- <section class="service-package" style="position: relative; " style=" background-image: url('<?= IMAGECHUNG ?>Bg-sp.png');">
        <img src="<?= IMAGECHUNG ?>Plane-topmay_bayspham.png" alt="" class="setinterval_maybay" id="setinterval_maybay" style="position: absolute; left: 5%; width: 300px;">
        <img src="<?= IMAGECHUNG ?>Essential-Tips-top-left.png" id="image" class="Essential-Tips_imgtop-package" alt="" style="position: absolute;top: 15%; right: 5%; ">
        <img src="<?= IMAGECHUNG ?>Essential-Tips-bottom-right.png" id="image2" class="Essential-Tips_imgbottom" alt="">
        <div class="content service-package">
            <button id="btnleft_service" class="service-package_2-link_btn-dieuhuwong1-left"><i class='bx bx-chevron-left'></i></button>
            <button id="btnright_service" class="service-package_2-link_btn-dieuhuwong2-right"><i class='bx bx-chevron-right'></i></button>
            <div class="service-package_1">
                <div>
                    <span class="service-package_1_1-content-text ">Chuyến Tham Quan Tuyệt Vời</span>
                    <h2 class="service-package_1_2-content-text ">Gói du Trong Nước (Việt Nam)</h2>
                    <p class="service-package_1_3-content-text ">Những gói du lịch tốt nhất của chúng tôi được thiết kế tỉ mỉ, kết hợp giữa lịch trình hấp dẫn, dịch vụ đẳng cấp và những điểm đến tuyệt đẹp, hứa hẹn mang đến cho bạn hành trình đáng nhớ và trải nghiệm tuyệt vời nhất.</p>
                </div>
            </div>
            <div class="service-package_2">
                <div class="content_package_2">
                    <?php foreach ($dataTuar as $value) { ?>
                        <?php if ($value->categories_destination_id == 1): ?>
                            <a href="">
                                <div class="service-package2-sanpam">
                                    <div class="service-package2-sanpam_img">
                                        <img src="<?= $value->image ?>" alt="" class="service-package2-sanpam_img1">
                                    </div>
                                    <div class="service-package2-sanpam_input-text">
                                        <div class="product-name">
                                            <a href="" class="product-name_a">
                                                <h2><?= $value->title ?></h2>
                                            </a>
                                        </div>
                                        <div class="service-package2-sanpam_input-text_wap">
                                            <div class="wap-left">
                                                <div class="wap-left_position">
                                                    <span class="wap-left_position_span-icon ">
                                                        <i class="bx bx-location-plus"></i>
                                                    </span>
                                                    <div class="link-position">
                                                        <a href="" class="link-position_1">Everest</a>
                                                        <a href="" class="link-position_1">India</a>
                                                        <a href="" class="link-position_1">Maldives</a>
                                                    </div>
                                                </div>
                                                <div class="wap-left_date">
                                                    <span class="wap-left_date_span-icon">
                                                        <i class="bx bx-calendar"></i>
                                                    </span>
                                                    <span class="wap-left_date-spandate">
                                                        <?= $value->time_days ?> Ngày - <?= $value->time_days - 1  ?> Đêm
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="wap-right">
                                                <span class="budget"><?= number_format($value->price) ?></span>
                                                <span class="budget$">đ</span>
                                            </div>
                                        </div>
                                        <div class="service-package2-sanpam_input-text_link">
                                            <a href="<?= BASE_URL ?>?page=tour_details&id=<?= $value->id ?>">Xem Chi Tiết </a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
            <div class="service-package_2-link">
                <a a href="<?= BASE_URL ?>?page=tour" class="service-package_2-link">Đọc Thêm </a>
            </div>
        </div>
    </section> -->

    <!--Explore -->
    <section class="Explore">
        <div class="content Explore">
            <div class="Explore-top">
                <div class="Explore-left">
                    <div class="Explore-left_text-input">
                        <h6>Đi & Khám Phá</h6>
                        <h1>Những thành phố tuyệt vời </h1>
                        <p> Nếu bạn đam mê khám phá những điểm đến độc đáo và trải nghiệm văn hóa mới, chúng tôi sẽ dẫn bạn đến những thành phố tuyệt vời nhất trên hành trình đáng nhớ này.</p>
                    </div>
                    <div class="Explore-left_img">
                        <div class="Explore-left_img1"><img src="<?= IMAGECHUNG ?>Explore-left_img1.jpg" alt=""></div>
                        <div class="Explore-left_img2"><img src="<?= IMAGECHUNG ?>Explore-left_img2.jpg" alt=""></div>
                    </div>
                </div>
                <div class="Explore-right">
                    <img src="<?= IMAGECHUNG ?>Explore-right-img.jpg" alt="">
                    <div class="Explore-right_itemvideo">
                        <span>xem video</span>
                        <a href=""><i class='bx bx-play'></i></a>
                    </div>
                </div>
            </div>
            <div class="Explore-bottom">
                <div class="Explore-bottom_iconmage">
                    <div class="Explore-bottom_iconmage-top">
                        <img src="<?= IMAGECHUNG ?>Explore-bottom_iconmage1.png" alt="">
                    </div>
                    <div class="Explore-bottom_iconmage-text">
                        <h3>Các hoạt động đặc biệt</h3>
                        <p>Các hoạt động đặc biệt mang đến trải nghiệm khác biệt và độc đáo</p>
                    </div>
                </div>
                <div class="Explore-bottom_iconmage">
                    <div class="Explore-bottom_iconmage-top">
                        <img src="<?= IMAGECHUNG ?>Explore-bottom_iconmage2.png" alt="">
                    </div>
                    <div class="Explore-bottom_iconmage-text">
                        <h3> Hướng dẫn viên </h3>
                        <p>Các hoạt động đặc biệt mang đến trải nghiệm khác biệt</p>
                    </div>
                </div>
                <div class="Explore-bottom_iconmage">
                    <div class="Explore-bottom_iconmage-top">
                        <img src="<?= IMAGECHUNG ?>Explore-bottom_iconmage3.png" alt="">
                    </div>
                    <div class="Explore-bottom_iconmage-text">
                        <h3>Đặt vé máy bay</h3>
                        <p>Các hoạt động đặc biệt mang đến trải nghiệm khác biệt</p>
                    </div>
                </div>
                <div class="Explore-bottom_iconmage">
                    <div class="Explore-bottom_iconmage-top">
                        <img src="<?= IMAGECHUNG ?>Explore-bottom_iconmage4.png" alt="">
                    </div>
                    <div class="Explore-bottom_iconmage-text">
                        <h3>Quản lý vị trí</h3>
                        <p>Các hoạt động đặc biệt mang đến trải nghiệm khác biệt và độc đáo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section clasS="Promotion">
        <div class="content Promotion">
            <div class="Promotion-left">
                <span>Go & Discover</span>
                <h2> Ưu đãi đặc biệt</h2>
                <p> Khám phá những ưu đãi đặc biệt độc đáo và tiết kiệm hấp dẫn chỉ dành riêng cho bạn. </p>
                <a href="">
                    <h2>Nhận ưu đãi ngay</h2>
                </a>
            </div>
            <div class="Promotion-right">
                <img src="<?= IMAGECHUNG ?>Promotion-right_img35.png" alt="">
            </div>
        </div>
    </section>
    <!-- beautifulstreet -->

    <section class="beautifulstreet">
        <div class="content beautifulstreet">
            <button class="btn_beautifulstreet" id="btnleft_beautifulstreet"><i class='bx bx-chevron-left'></i></button>
            <button class="btn_beautifulstreet" id="btnright_beautifulstreet"><i class='bx bx-chevron-right'></i></button>
            <div class="beautifulstreet-top">
                <h6>Đi & Khám Phá</h6>
                <h1>Những thành phố đẹp</h1>
                <p>Khám phá những thành phố đẹp trên thế giới, nơi sự kết hợp hoàn hảo giữa kiến trúc tuyệt vời, văn hóa đa dạng và cuộc sống sôi động tạo nên những trải nghiệm đáng nhớ.</p>
            </div>
            <div class="beautifulstreet-bottom">
                <?php foreach ($dataDestination as $value) { ?>
                    <div class="beautifulstreet-bottom_sanpham">
                        <a href="">
                            <div class="beautifulstreet-bottom_sanpham-top">
                                <div class="beautifulstreet-bottom_sanpham-img"><img src="<?= $value->image ?>" alt=""></div>
                                <div class="trips">
                                    <span class="trips-span">
                                        <span><?= $value->soluong_tuar ?></span>
                                        <span>trips</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class="beautifulstreet-bottom_sanpham-bottom">
                            <div class="beautifulstreet-bottom_sanpham-bottom_link">
                                <a href="">
                                    <h6><?= $value->title ?></h6>
                                </a>
                                <span class="span-link"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--Customer-->
    <section class="Customer">
        <div class="content Customer">
            <div class="Customer-left">
                <h6>Đi & Khám Phá</h6>
                <h1>Khách hàng của chúng tôi</h1>
                <p>Đánh giá khách hàng là một phần quan trọng trong việc đánh giá chất lượng dịch vụ hoặc sản phẩm mà một công ty cung cấp.</p>
                <a href="">
                    <h6>Xem Thêm </h6>
                </a>
            </div>
            <div class="Customer-right">
                <div class="Customer-right_img">
                    <img src="<?= IMAGECHUNG ?>img-khachhang.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="content news-section">
            <div class="news-section-top">
                <h6>Blog & Tin Tức</h6>
                <h1>Bài viết mới</h1>
                <p>Khám phá bài viết mới nhất với thông tin nổi bật, các xu hướng mới nhất và nội dung hữu ích để giúp bạn cập nhật và được thông tin tức thời.</p>
            </div>
            <div class="news-section-bottom">
                <div class="blog-grid">
                    <?php foreach ($datablog as $value) { ?>
                        <div class="blog-card">
                            <div class="blog-card-image">
                                <img src="<?= $value->image_url ?>" alt="10 Sun Hats For Beach Days, Long">
                            </div>
                            <div class="blog-card-content">
                                <h3><a href="<?= BASE_URL ?>?page=blog_chitiet&id=<?= $value->blog_id ?>"><?= $value->title ?></a></h3>
                                <p><?= $value->content ?></p>
                                <div class="blog-card-meta">
                                    <i class="bx bx-calendar"></i>
                                    <span><?= $value->publish_date ?></span>
                                </div>
                                <a href="<?= BASE_URL ?>?page=blog_chitiet&id=<?= $value->blog_id ?>&idauthor=<?= $value->id_author ?>" class="read-more-btn">ĐỌC THÊM →</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="news-section-bottom-link">
                    <a href="<?= BASE_URL ?>?page=blog">
                        <button class="view-more-btn">XEM THÊM</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= Js_Client ?>Trangchu.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>