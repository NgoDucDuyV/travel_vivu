document.addEventListener('DOMContentLoaded', function() {
            // Xử lý chuyển đổi tab
            const tabs = document.querySelectorAll('.tab-link');
            const underline = document.querySelector('.tab-underline');
            const tabPanes = document.querySelectorAll('.tab-pane');

            function updateUnderline(activeTab) {
                const tabRect = activeTab.getBoundingClientRect();
                const containerRect = activeTab.parentElement.getBoundingClientRect();
                underline.style.width = `${tabRect.width}px`;
                underline.style.transform = `translateX(${tabRect.left - containerRect.left}px)`;
            }

            // Cập nhật vị trí gạch chân lần đầu
            const initialActiveTab = document.querySelector('.tab-link.active');
            if (initialActiveTab) {
                updateUnderline(initialActiveTab);
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();

                    tabs.forEach(t => t.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    this.classList.add('active');

                    const targetId = this.getAttribute('data-tab');
                    const targetPane = document.getElementById(targetId);
                    if (targetPane) {
                        targetPane.classList.add('active');
                    }

                    updateUnderline(this);
                });
            });

            window.addEventListener('resize', () => {
                const activeTab = document.querySelector('.tab-link.active');
                if (activeTab && activeTab.closest('.content-section').classList.contains('active')) {
                    updateUnderline(activeTab);
                }
            });
        });