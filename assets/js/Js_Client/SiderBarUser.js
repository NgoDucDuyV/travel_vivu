// fetApi điều hường
const menuitemAs = document.querySelectorAll('.menu_itemclientaccount a');
const skeletonCardContainer = document.querySelector('.skeleton-card-container');
const BASE_URL = 'http://localhost/mvc-oop-basic-duanmau-DuyDum-StorMaty_SimpleShop/';
if(menuitemAs){
function fetchApi(mode, act) {
    // skeletonCardContainer.style.display = 'block';
        let url = `${BASE_URL}?mode=${mode}&act=${act}`;
        console.log(url);
        
        fetch(url)
            .then(res => res.text())
            .then(html => {
                document.querySelector('.content_user').innerHTML = html;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            })
            .finally(() => {
                // skeletonCardContainer.style.display = 'none';
            });
    }

    menuitemAs.forEach(function(el) {
        el.addEventListener('click', function(e) {
            e.preventDefault();
            const mode = this.dataset.mode;
            const act = this.dataset.act;
            fetchApi(mode, act);
        });
    });
}


        
        // let MenuIitem = document.querySelectorAll('.menu_item');
        // let MenuIitemA = document.querySelector('.menu_item>a');

        //     function ClickMenuIitem(event) {
        //         // event.preventDefault();

        //         let MenuIitemACon = this.querySelector('.menu_item>a');
        //         MenuIitem.forEach(function(item) {
        //             item.classList.remove('Onclickmenu_item');
        //         });

        //         this.classList.add('Onclickmenu_item');
        //         MenuIitemACon.classList.add('menuitemA');
        //     }

        //     MenuIitem.forEach(function(item) {
        //         item.addEventListener('click', ClickMenuIitem);
        //     });

        //     document.querySelectorAll('.menu-link').forEach(link => {
        //         link.addEventListener('click', function(e) {
        //             e.preventDefault();
        //             const url = this.getAttribute('href');

        //             fetch(url)
        //                 .then(res => res.text())
        //                 .then(data => {
        //                     document.getElementById('main-content').innerHTML = data;
        //                 })
        //                 .catch(err => console.error('Lỗi tải nội dung:', err));
        //         });
        //     });

        //     // Hỗ trợ khi người dùng nhấn Back/Forward trên trình duyệt
        //     window.addEventListener('popstate', function(e) {
        //         if (e.state && e.state.page) {
        //             fetch(e.state.page)
        //                 .then(res => res.text())
        //                 .then(data => {
        //                     document.getElementById('main-content').innerHTML = data;
        //                 });
        //         }
        //     });


