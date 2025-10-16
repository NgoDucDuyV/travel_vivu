<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhutan Cultural Tour: Explore the Himalayan Kingdom</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>DetailsTouar.css">
</head>

<body>

    <div class="container">
        <div class="page-title-section">
            <h1 class="page-title"><?= $dataTuar->title ?></h1>
            <div class="days-label">
                <?= $dataTuar->time_days ?><br>
                <small>Ngày</small>
            </div>
        </div>

        <div class="main-content">
            <div class="tour-details">
                <div class="tour-image">
                    <img src="<?= $dataTuar->image ?>" alt="Bhutan Cultural Tour">
                    <div class="image-count">
                        1/4 Hình ảnh
                    </div>
                </div>

                <div class="tour-nav">
                    <a href="#" class="tab-link active" data-tab="overview">Tổng quan</a>
                    <a href="#" class="tab-link" data-tab="itinerary">Hành trình</a>
                    <a href="#" class="tab-link" data-tab="cost">Chi phí</a>
                    <a href="#" class="tab-link" data-tab="faqs">FAQs</a>
                    <a href="#" class="tab-link" data-tab="map">Map</a>
                </div>

                <div class="tab-content-container">
                    <div id="overview" class="tab-content active">
                        <div class="overview-section">
                            <h2 class="section-title">Overview</h2>
                            <p><?= $dataTuar->description ?></p>
                            <p><?= $dataTuar->description ?></p>
                            <p>The origin of the word 'travel' is most likely lost to history. The term 'travel' may originate from the Old French word travail, which means 'work'. According to the Merriam Webster dictionary, the first known use of the word travel was in the 14th century.</p>
                        </div>

                        <div class="highlights-section">
                            <h2 class="section-title">Highlights</h2>
                            <ul class="highlight-list">
                                <li>Trek to the world famous Everest Base Camp</li>
                                <li>Enjoy the amazing view of the Himalayas from Kala Patthar</li>
                                <li>Travel through the Sherpa villages of Namche, Khumjung, Khunde, and Dingboche</li>
                                <li>Visit Tengboche the biggest and oldest monastery n the region.</li>
                            </ul>
                        </div>
                    </div>

                    <div id="itinerary" class="tab-content">
                        <div class="itinerary-section">
                            <div class="itinerary-header">
                                <h2 class="section-title">Hành trình</h2>
                                <span class="expand-all">Mở rộng tất cả</span>
                            </div>

                            <div class="itinerary-item" data-day="day1">
                                <span class="day-number">Ngày 1</span>
                                <h3>: Kathmandu to Pokhara (By flight or Bus), the city of Lakes, adventures</h3>
                                <span class="arrow"><i class="fas fa-plus"></i></span>
                            </div>
                            <div id="day1-content" class="itinerary-day-details">
                                <p>Sáng: Di chuyển từ Kathmandu đến Pokhara bằng máy bay hoặc xe buýt. Nhận phòng khách sạn, nghỉ ngơi.</p>
                                <p>Chiều: Tự do khám phá thành phố Pokhara, dạo quanh hồ Fewa, ngắm hoàng hôn.</p>
                            </div>

                            <div class="itinerary-item" data-day="day2">
                                <span class="day-number">Ngày 2</span>
                                <h3>: Pokhara to Kathmandu</h3>
                                <span class="arrow"><i class="fas fa-plus"></i></span>
                            </div>
                            <div id="day2-content" class="itinerary-day-details">
                                <p>Sáng: Ăn sáng, sau đó tham gia các hoạt động như chèo thuyền trên hồ, thăm đền Tal Barahi.</p>
                                <p>Chiều: Quay trở lại Kathmandu bằng máy bay hoặc xe buýt. Kết thúc tour.</p>
                            </div>
                        </div>
                    </div>

                    <div id="cost" class="tab-content">
                        <h2 class="section-title">Chi phí</h2>
                        <ul class="cost-list">
                            <li>
                                <h4>Bao gồm</h4>
                                <p>Vé máy bay khứ hồi nội địa (Kathmandu - Pokhara), 4 đêm khách sạn 4 sao, bữa ăn theo lịch trình, hướng dẫn viên nói tiếng Anh, phương tiện di chuyển.</p>
                            </li>
                            <li>
                                <h4>Không bao gồm</h4>
                                <p>Vé máy bay quốc tế, chi phí visa, tiền tip, chi tiêu cá nhân, bảo hiểm du lịch, các bữa ăn không có trong lịch trình.</p>
                            </li>
                        </ul>
                    </div>

                    <div id="faqs" class="tab-content">
                        <h2 class="section-title">FAQs</h2>
                        <div class="faq-list">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>Visa có cần thiết không?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Có, bạn cần có visa để nhập cảnh Bhutan. Chúng tôi sẽ hỗ trợ bạn trong quá trình xin visa du lịch.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>Thời tiết ở Bhutan vào tháng 4 như thế nào?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Tháng 4 là một trong những tháng có thời tiết đẹp nhất ở Bhutan, với nhiệt độ dễ chịu và bầu trời trong xanh, rất lý tưởng cho các hoạt động ngoài trời.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="map" class="tab-content">
                        <h2 class="section-title">Map</h2>
                        <p>Bản đồ sẽ được cung cấp chi tiết hơn khi bạn xác nhận đặt tour. Dưới đây là bản đồ chung của Bhutan để bạn tham khảo.</p>
                        <img src="#" alt="Map of Bhutan" style="width: 100%; border-radius: 8px;">
                    </div>
                </div>
            </div>

            <div class="sidebar">
                <div class="price-box">
                    <div class="price">
                        <?= number_format($dataTuar->price) ?>VND <small>/ Adult</small>
                    </div>
                    <button class="btn-check">Kiểm tra</button>
                    <a href="<?= BASE_URL ?><?= ThemTouarShoping ?>&tuar_id=<?= $dataTuar->id ?>" class="btn-check themgiohang"
                        onclick="return confirm('Bạn muốn thêm vào giỏ hàng!')"><i class='bxr  bx-shopping-bag-alt'></i> Thêm Vào giỏ hàng</a>
                    <div class="contact-info">
                        Cần trợ giúp về việc đặt chỗ? <a href="#">Gửi tin nhắn cho chúng tôi</a>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <i class="fas fa-bed icon"></i>
                        <div>
                            <div class="label">Accommodation</div>
                            <div class="value">4 Stars Hotels</div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <i class="fas fa-plane icon"></i>
                        <div>
                            <div class="label">Transportation</div>
                            <div class="value">Bus, Airlines</div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <i class="fas fa-mountain icon"></i>
                        <div>
                            <div class="label">Maximum Altitude</div>
                            <div class="value">5,416 metres</div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <i class="fas fa-map-marker-alt icon"></i>
                        <div>
                            <div class="label">Departure City</div>
                            <div class="value">Kathmandu</div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <i class="fas fa-calendar-alt icon"></i>
                        <div>
                            <div class="label">Best Season</div>
                            <div class="value">Feb, Mar, Apr & May</div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <i class="fas fa-check-circle icon"></i>
                        <div>
                            <div class="label">Tour Availability</div>
                            <div class="value">Available</div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <i class="fas fa-utensils icon"></i>
                        <div>
                            <div class="label">Meals</div>
                            <div class="value">All meals during the trip</div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <i class="fas fa-language icon"></i>
                        <div>
                            <div class="label">Language</div>
                            <div class="value">English, Spanish, French, Chinese</div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <i class="fas fa-clock icon"></i>
                        <div>
                            <div class="label">Walking Hours</div>
                            <div class="value">5-8 Hours</div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <i class="fas fa-wifi icon"></i>
                        <div>
                            <div class="label">Wifi</div>
                            <div class="value">Available</div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <i class="fas fa-user icon"></i>
                        <div>
                            <div class="label">Minimum Age</div>
                            <div class="value">12</div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <i class="fas fa-user icon"></i>
                        <div>
                            <div class="label">Maximum Age</div>
                            <div class="value">65</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= Js_Client ?>DetailsTouar.js"></script>
</body>

</html>