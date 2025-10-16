<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="<?= CSS ?>header.css">
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>Footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>
    <!-- footer -->
    <section class="footer">
        <img src="<?= Image_Chung ?>footer-bg-scaled-1.jpg" alt="" class="backgrouFoter">
        <div class="fromdangky">
            <div class="fromdangky_left">
                <h2>Bạn đã sẵn sàng</h2>
                <p>Chỉ mất vài phút để đăng ký tài khoản VIvu MIỄN PHÍ.</p>
                <a href="">
                    <h6>ĐĂNG KÝ TÀI KHOẢN</h6>
                </a>
            </div>
            <div class="fromdangky_right">
                <img src="<?= IMAGECHUNG ?>newsletter-footer-img1.png" alt="">
            </div>
        </div>
        <div class="content footer">
            <div class="footer-top">
                <div class="contentfooter-elemen1">
                    <div class="contentfooter-elemen1_1">
                        <img src="<?= IMAGECHUNG ?>Logo_Dregner_DuyDumStorsmaty_Whitle.png" alt="">
                    </div>
                    <div class="contentfooter-elemen1_2">
                        <p>Chào mừng bạn đến với gói du lịch tốt nhất của chúng tôi! Nếu bạn đang tìm kiếm một hành trình đáng nhớ và tiện ích, đây là lựa chọn hoàn hảo dành cho bạn.</p>
                    </div>
                    <div class="contentfooter-elemen1_3">
                    </div>
                </div>
                <div class="contentfooter-elemen2">
                    <div class="contentfooter-elemen2_1">
                        <h4>Điều hướng</h4>
                    </div>
                    <div class="contentfooter-elemen2_2">
                        <ul class="contentfooter-elemen2_2">
                            <li><a href="<?= BASE_URL ?>?page=trangchu"><i class='bx bx-chevron-right'></i>Trang chủ</a></li>
                            <li><a href="<?= BASE_URL ?>?page=tuar"><i class='bx bx-chevron-right'></i>Tours</a></li>
                            <li><a href="<?= BASE_URL ?>?page=vechungtoi"><i class='bx bx-chevron-right'></i>Về chúng tôi</a></li>
                            <li><a href="<?= BASE_URL ?>?page=blog"><i class='bx bx-chevron-right'></i>Blog</a></li>
                            <li><a href="<?= BASE_URL ?>?page=lienhe"><i class='bx bx-chevron-right'></i>Liên hệ</a></li>

                        </ul>
                    </div>
                </div>
                <div class="contentfooter-elemen3">
                    <div class="contentfooter-elemen3_1">
                        <h4>Instagram</h4>
                    </div>
                    <div class="contentfooter-elemen3_2">
                        <div class="contentfooter-elemen3_2-img">
                            <img src="<?= IMAGECHUNG ?>beautifulstreet-bottom_sanpham-img1.jpg" alt="">
                        </div>
                        <div class="contentfooter-elemen3_2-img">
                            <img src="<?= IMAGECHUNG ?>beautifulstreet-bottom_sanpham-img2.jpg" alt="">
                        </div>
                        <div class="contentfooter-elemen3_2-img">
                            <img src="<?= IMAGECHUNG ?>beautifulstreet-bottom_sanpham-img3.jpg" alt="">
                        </div>
                        <div class="contentfooter-elemen3_2-img">
                            <img src="<?= IMAGECHUNG ?>beautifulstreet-bottom_sanpham-img4.jpg" alt="">
                        </div>
                        <div class="contentfooter-elemen3_2-img">
                            <img src="<?= IMAGECHUNG ?>beautifulstreet-bottom_sanpham-img5.jpg" alt="">
                        </div>
                        <div class="contentfooter-elemen3_2-img">
                            <img src="<?= IMAGECHUNG ?>beautifulstreet-bottom_sanpham-img6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="contentfooter-elemen4">
                    <div class="contentfooter-elemen4_1">
                        <h4>Theo dõi</h4>
                    </div>
                    <div class="contentfooter-elemen4_2">
                        <form action="" class="contentfooter-elemen4_2-form">
                            <label>Đăng ký để nhận được tin tức mới nhất</label>
                            <input type="text" placeholder="Email">
                            <button onclick="tab()">
                                <h6>ĐĂNG KÝ</h6>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© Thiết kế và lập trình bởi Ngoducduy</span>
            <div class="footer-bottom-right">
                <a href="">Chính sách</a>
                <a href="">Điều khoản</a>
            </div>
        </div>
    </section>
    <script src="<?= Js_Client ?>js.js"></script>
    <script src="<?= Js_Client ?>hieuunghoamai.js"></script>
</body>

</html>