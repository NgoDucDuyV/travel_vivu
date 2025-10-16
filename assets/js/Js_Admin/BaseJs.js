// fertch API 
const MenuItems = document.querySelectorAll('.menu_item a');

console.log(MenuItems);





// siderbar 
    const siderBar = document.getElementsByClassName("siderabrAdmin");
    const Body = document.body;
    function OnSiderBar(){
        'ues strict';
        siderBar[0].classList.add('OnSiderBar');
        siderBar[0].classList.remove('OfSiderBar');
        Body.classList.add('bodyNoscorll');
    }
    function OfSiderBar(){
        'use strict';
        siderBar[0].classList.add('OfSiderBar');
        siderBar[0].classList.remove('OnSiderBar');
        Body.classList.remove('bodyNoscorll');
    }
    
        function checkWidthAndRun() {
        if (window.innerWidth > 1024) {
            OnSiderBar();
            // disableScroll();
        }
        if (window.innerWidth < 1024) {
            OfSiderBar();
            // enableScroll();
        }
        }

        // các nút xem nút .. edit show dalete các bảng 
        // quản lý Touar Hoạt Động
        document.addEventListener('DOMContentLoaded', function() {
            const createBtn = document.getElementById('create-btn');
            const filterBtn = document.getElementById('filter-btn');
            const checkAll = document.getElementById('check-all');
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            const paginationLinks = document.querySelectorAll('.pagination-link');
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            const dropdownMenus = document.querySelectorAll('.dropdown-menu');

            // Sự kiện cho nút "Tạo mới"
            if (createBtn) {
                createBtn.addEventListener('click', function() {
                alert('Bạn đã click vào nút "Tạo mới"!');
            });
            }

            // Sự kiện cho nút "Lọc"
            if (filterBtn) {
                filterBtn.addEventListener('click', function() {
                alert('Bạn đã click vào nút "Lọc"!');
            });
            }

            // Sự kiện cho checkbox "Chọn tất cả"
            if (checkAll) {
                checkAll.addEventListener('change', function() {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
            });
            }

            // Sự kiện cho các nút phân trang
            if (paginationLinks) {
                paginationLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // e.preventDefault();

                    paginationLinks.forEach(item => item.classList.remove('active'));

                    if (!this.classList.contains('disabled')) {
                        this.classList.add('active');
                        alert(`Bạn đã chuyển đến trang: ${this.textContent.trim()}`);
                    }
                });
            });
            }

            // Sự kiện cho các nút dropdown (ba chấm)
            if (dropdownToggles) {
                dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    // e.stopPropagation(); // Ngăn chặn sự kiện click lan truyền ra ngoài

                    // Đóng tất cả các menu khác
                    dropdownMenus.forEach(menu => {
                        if (menu !== this.nextElementSibling) {
                            menu.classList.remove('show');
                        }
                    });

                    // Mở/đóng menu hiện tại
                    this.nextElementSibling.classList.toggle('show');
                });
            });
            }

            // Đóng menu khi click ra ngoài
            if (document) {
                document.addEventListener('click', function(e) {
                if (!e.target.closest('.dropdown')) {
                    dropdownMenus.forEach(menu => {
                        menu.classList.remove('show');
                    });
                }
            });
            }

            
            // Xử lý các sự kiện click cho các nút chức năng trong menu
            document.querySelectorAll('.show-action').forEach(item => {
                item.addEventListener('click', function(e) {
                    // e.preventDefault();
                    e.stopPropagation(); // Ngăn chặn đóng menu ngay lập tức
                    alert('Bạn đã click vào Show!');
                });
            });

            document.querySelectorAll('.edit-action').forEach(item => {
                item.addEventListener('click', function(e) {
                    // e.preventDefault();
                    e.stopPropagation();
                    alert('Bạn đã click vào Edit!');
                });
            });

            document.querySelectorAll('.delete-action').forEach(item => {
                item.addEventListener('click', function(e) {
                    // e.preventDefault();
                    e.stopPropagation();
                    if (confirm("Bạn có chắc chắn muốn xóa không?")) {
                        alert('Bạn đã Xóa sản phẩm');
                    }
                });
            });
        });
        
    checkWidthAndRun();
window.addEventListener('resize', checkWidthAndRun);

let menu_item = document.querySelectorAll(".menu_item>a");
if (menu_item) {
    function innerMenuItem(event){
    // event.preventDefault();
        menu_item.forEach(function(item) {
        item.classList.remove('innerMenuItem');
        });
        this.classList.add('innerMenuItem');
    }

    menu_item.forEach(function(item) {
        item.addEventListener('click', innerMenuItem);
    });
}

let menuitemOption = document.querySelectorAll(".menuitemOption");
if (menuitemOption) {
    function MenuitemOption(event) {
    event.preventDefault();

    // Xóa class 
    menuitemOption.forEach(function(item){
        item.classList.remove('innerMenuItem');
    });

    let Link = this.querySelector('.submenu_item');
    let ItemIcon = this.querySelector('.arrow_box>i');
    if(Link){
    if (Link.classList.contains('submenu_itemClose')) {
        Link.classList.remove('submenu_itemClose');
        ItemIcon.classList.remove('reverse');
    } else {
        Link.classList.add('submenu_itemClose');
        ItemIcon.classList.add('reverse');
    }
    }
}
    menuitemOption.forEach(function(item){
    item.addEventListener('click', MenuitemOption);
});
}

let children = document.querySelectorAll(".menuitemOption>ul"); // tất cả con
if (children) {
    children.forEach(function(child){
    child.addEventListener('click', function(event){
        event.stopPropagation(); 
    });
});
}




