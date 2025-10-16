document.addEventListener('DOMContentLoaded', function() {
            // Xử lý đóng/mở các bộ lọc ở sidebar
            const filterGroups = document.querySelectorAll('.filter-group');
            filterGroups.forEach(group => {
                const header = group.querySelector('.filter-group-header');
                header.addEventListener('click', () => {
                    const content = group.querySelector('.filter-group-content');
                    if (content) {
                        group.classList.toggle('closed');
                    }
                });
            });

            // Xử lý dropdown sắp xếp
            const sortByDropdown = document.querySelector('.sort-by-dropdown');
            const dropdownHeader = sortByDropdown.querySelector('.dropdown-header');
            const dropdownItems = sortByDropdown.querySelectorAll('.dropdown-item');
            const selectedOptionSpan = sortByDropdown.querySelector('.selected-option');

            dropdownHeader.addEventListener('click', function(e) {
                e.stopPropagation();
                sortByDropdown.classList.toggle('open');
            });

            dropdownItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Xóa trạng thái active cũ
                    sortByDropdown.querySelectorAll('.dropdown-item').forEach(el => el.classList.remove('active'));

                    // Đặt trạng thái active mới
                    this.classList.add('active');

                    // Cập nhật text hiển thị trên header
                    selectedOptionSpan.textContent = this.textContent;

                    // Đóng menu
                    sortByDropdown.classList.remove('open');

                    // Thêm logic sắp xếp dữ liệu ở đây
                    console.log(`Đã chọn sắp xếp: ${this.textContent}`);
                });
            });

            // Đóng dropdown khi click ra ngoài
            window.addEventListener('click', function(e) {
                if (!e.target.closest('.sort-by-dropdown')) {
                    sortByDropdown.classList.remove('open');
                }
            });
        });