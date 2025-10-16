document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('.tour-nav .tab-link');
            const tabContents = document.querySelectorAll('.tab-content-container .tab-content');

            tabLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const tabId = this.getAttribute('data-tab');

                    // Ẩn tất cả nội dung tab
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                    });

                    // Xóa trạng thái active của tất cả các link
                    tabLinks.forEach(link => {
                        link.classList.remove('active');
                    });

                    // Hiển thị nội dung tab được chọn và đặt trạng thái active cho link
                    document.getElementById(tabId).classList.add('active');
                    this.classList.add('active');
                });
            });

            // Chức năng mở/đóng chi tiết hành trình
            const itineraryItems = document.querySelectorAll('.itinerary-item');
            itineraryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const dayId = this.getAttribute('data-day');
                    const content = document.getElementById(dayId + '-content');
                    if (content) {
                        content.style.display = content.style.display === 'block' ? 'none' : 'block';
                        const icon = this.querySelector('.arrow i');
                        if (icon) {
                            icon.classList.toggle('fa-plus');
                            icon.classList.toggle('fa-minus');
                        }
                    }
                });
            });

            // Chức năng mở/đóng FAQs
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                item.addEventListener('click', function() {
                    this.classList.toggle('active');
                });
            });

            // Chức năng nút kiểm tra
            const checkButton = document.querySelector('.btn-check');
            checkButton.addEventListener('click', function() {
                alert('Chức năng kiểm tra đang được phát triển.');
            });

            // Chức năng mở rộng tất cả
            const expandAllButton = document.querySelector('.expand-all');
            expandAllButton.addEventListener('click', function() {
                alert('Chức năng mở rộng tất cả đang được phát triển.');
            });
        });