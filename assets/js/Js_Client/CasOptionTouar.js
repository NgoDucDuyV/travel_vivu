document.addEventListener("DOMContentLoaded", function() {
                    const carouselTrack = document.querySelector(".service-package_2 .content_package_2");
                    const items = document.querySelectorAll(".service-package2-sanpam");
                    const btnRight = document.querySelector("#btnright_service");
                    const btnLeft = document.querySelector("#btnleft_service");

                    // Kiểm tra xem các phần tử có tồn tại không trước khi tiếp tục
                    if (!carouselTrack || items.length === 0 || !btnRight || !btnLeft) {
                        console.error("One or more carousel elements not found.");
                        return;
                    }

                    const cardWidth = items[0].offsetWidth;
                    const cardMarginLeft = parseFloat(window.getComputedStyle(items[0]).marginLeft);
                    const cardMarginRight = parseFloat(window.getComputedStyle(items[0]).marginRight);
                    const cardFullWidth = cardWidth + cardMarginLeft + cardMarginRight + 10; // Cộng thêm 10 nếu cần giãn

                    let currentIndex = 0;
                    let autoScrollInterval;

                    function startAutoScroll() {
                        autoScrollInterval = setInterval(scrollRight, 2000);
                    }

                    function stopAutoScroll() {
                        clearInterval(autoScrollInterval);
                    }

                    function scrollRight() {
                        if (currentIndex < items.length - 3) {
                            currentIndex++;
                        } else {
                            currentIndex = 0;
                        }
                        updateCarousel();
                    }

                    function scrollLeft() {
                        if (currentIndex > 0) {
                            currentIndex--;
                        } else {
                            currentIndex = items.length - 3;
                        }
                        updateCarousel();
                    }

                    function updateCarousel() {
                        const translateXValue = -currentIndex * cardFullWidth;
                        carouselTrack.style.transform = `translateX(${translateXValue}px)`;
                    }

                    // Gắn sự kiện click
                    btnRight.addEventListener("click", scrollRight);
                    btnLeft.addEventListener("click", scrollLeft);

                    // Hover để dừng và khởi động lại auto scroll
                    [carouselTrack, btnRight, btnLeft].forEach(el => {
                        el.addEventListener("mouseenter", stopAutoScroll);
                        el.addEventListener("mouseleave", startAutoScroll);
                    });

                    // Khởi động auto scroll
                    startAutoScroll();
                });