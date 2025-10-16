// js hien thi tim kiem
function closetimkiem(){
    var timkiem = document.getElementById("timkiem");
    var outline = document.getElementById("timkiem_header-center");
    outline.style.opacity="0";
    timkiem.style.width="0%";
    timkiem.style.left="-100px";
}
function upentimkiem(){
    var timkiem = document.getElementById("timkiem");
    timkiem.style.width="100%";
    timkiem.style.left="0px";
    var outline = document.getElementById("timkiem_header-center");
    outline.style.opacity="1"; 
}
//  tab menu 
const tabmenu = document.getElementById('tabmenuMoBi');
const closeMenuMobi = document.querySelector('.closeMenuMobi');
const tab3menuMobi = document.querySelector('.tab3menu');
if(tabmenu && closeMenuMobi && tab3menuMobi){
    function ClickTabmenu(event){
        if( tabmenu.classList.contains('tabmenuOnclick')){
            tabmenu.classList.remove('tabmenuOnclick');
        }else{
            tabmenu.classList.add('tabmenuOnclick');
        }
    }
    closeMenuMobi.addEventListener('click',ClickTabmenu);
    tab3menuMobi.addEventListener('click',ClickTabmenu);
}

// menu con mobi
// const Zumto = "<i class='bxr  bx-expand-left'></i>";
// const Zumnho = "<i class='bxr  bx-shrink-right'></i>";
const omofmenumibis = document.querySelectorAll('.onofmenucon'); 
if(omofmenumibis){
    omofmenumibis.forEach(el => {
    el.addEventListener('click', function(event) {
        event.preventDefault(); // không cho <a> nhảy trang
        event.stopPropagation(); // không lan ra cha
        if (this.children[0].classList.contains('bx-expand-left')) {
            this.children[0].classList.remove('bx-expand-left');
            this.children[0].classList.add('bx-shrink-right');
        } else {
            this.children[0].classList.remove('bx-shrink-right');
            this.children[0].classList.add('bx-expand-left');   
        }

        const menuCon = this.nextElementSibling;
        if (menuCon.classList.contains('clickmenuitemconMobi')) {
            menuCon.classList.remove('clickmenuitemconMobi');
        } else {
            menuCon.classList.add('clickmenuitemconMobi');
        }
    });
});
}

// js header
const headerjs = document.querySelector('.header');
const header_retunr = document.querySelector('.header_retunr');
const header_btn = document.querySelector('.header_retunr_btn');
if(headerjs && header_retunr && header_btn){
function OnOfHeader(){
    if (headerjs.classList.contains('headerOn')) {
        headerjs.classList.add('headerOf');
        headerjs.classList.remove('headerOn');
    }else{
        headerjs.classList.add('headerOn');
        headerjs.classList.remove('headerOf');
    }
}
function ClickRetunrBtn(event){
    event.preventDefault(); // không cho <a> nhảy trang
    event.stopPropagation(); // không lan ra cha
    if (this.children[0].classList.contains('bx-chevrons-up')) {
        this.children[0].classList.remove('bx-chevrons-up');
        this.children[0].classList.add('bx-chevrons-down');
    }else {
        this.children[0].classList.remove('bx-chevrons-down');
        this.children[0].classList.add('bx-chevrons-up');
    }
    OnOfHeader();  
}

header_btn.addEventListener('click',ClickRetunrBtn);
headerjs.style.transition = "all 0.4s ease ";
headerjs.style.opacity = "1";
}
// js menu con pc
const menuItemclicks = document.querySelectorAll('.menu-item_click');
    if(menuItemclicks){
        function HoverMenuitemcon(event) {
        this.children[1].classList.add('menuitemconClick');
    }
    function NoHoverMenuitemcon(event) {
        this.children[1].classList.remove('menuitemconClick');
    }
    menuItemclicks.forEach(function(menuItemclick) {
        // menuItemclick.addEventListener('click', onMenuitemcon);
        menuItemclick.addEventListener('mouseover', HoverMenuitemcon);
        menuItemclick.addEventListener('mouseout', NoHoverMenuitemcon);
    })
    // Click ngoài menu → đóng menu
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.menu-item_click')) {
            menuItemclicks.forEach(menuItemclick => {
                menuItemclick.classList.remove('menuitemconClick');
            });
        }
    });
    // Kéo/lướt trang (scroll) → đóng menu
    window.addEventListener('scroll', function() {
        document.querySelectorAll('.menuitemconClick').forEach(ul => {
            ul.classList.remove('menuitemconClick');
        });
    });
    }

    // scrool html 

    // const contentHeader = document.querySelector('.content-header');
    // var contentArea = document.querySelector('.content-area');
    // contentArea.addEventListener('scroll', function(){
    //     if(contentArea.scrollTop > 0){
    //         contentHeader.style.height = "70px";
    //     }else{
    //         contentHeader.style.height = "120px";
    //     }
    // });
