//js chuyen anh hero

const hero_img1= document.querySelectorAll("#hero_img1>img");
const hero_img2= document.querySelectorAll("#hero_img2>img");
// console.log(hero_img1);
for (let index = 1; index < 3; index++) {
    hero_img1[index].style.opacity = "0";
    hero_img2[index].style.opacity = "0";
}
// su lys anh 
function xulyimg(){
    for (let index = 0; index < hero_img1.length; index++) {
        hero_img1[index].style.opacity = "0";
        hero_img2[index].style.opacity = "0";
    }
    
}
let btn1 = document.getElementById("btn1hero");
const btnherolauoutS = document.querySelectorAll(".btnhero");
// console.log(btn1);
btn1.classList.add("active_btn");
function layout(solayout,btn){    
    for (let index = 0; index < btnherolauoutS.length; index++) {
        btnherolauoutS[index].classList.remove('active_btn');
    }
    btn.classList.add('active_btn');
    switch (solayout) {
        case 1:
            xulyimg();
            hero_img1[0].style.opacity = "1";
            hero_img2[0].style.opacity = "1";
            break;
        case 2:
            xulyimg();
            hero_img1[1].style.opacity = "1";
            hero_img2[1].style.opacity = "1";
            break;
        case 3:
            xulyimg();
            hero_img1[2].style.opacity = "1";
            hero_img2[2].style.opacity = "1";
            break;
        default:
            break;
    }
}
let sorandum = 1 ;
let indexbtn = 0;
let mysetintervalbtn;
for (let index = 0; index < btnherolauoutS.length; index++) {
    btnherolauoutS[index].setAttribute('onmousemove','deletesetintervalbtn()' );
    btnherolauoutS[index].setAttribute('onmouseout' ,'setintervalbtn()' );
}
function laplaiimghero(){
    if (sorandum < 3) {
        sorandum +=1;
    } else {
        sorandum = 1;
    }
    if (indexbtn < 2) {
        indexbtn +=1;
    } else {
        indexbtn = 0;
    }
    layout(sorandum,btnherolauoutS[indexbtn]);
}
function setintervalbtn(){
    mysetintervalbtn = setInterval(laplaiimghero, 2000);
}
setintervalbtn();
function deletesetintervalbtn(){
    clearInterval(mysetintervalbtn);
}

// Ví dụ gọi thử


let setinterval_maybay = document.getElementById("setinterval_maybay");
setinterval_maybay.style.opacity = "0";
setinterval_maybay.style.transition = "all 1s ease";
setInterval(()=>{
    if (setinterval_maybay.style.opacity == "1") {
        setinterval_maybay.style.opacity = "0"
    } else {
        setinterval_maybay.style.opacity = "1";
    }
}, 1500);

// <!-- js anh 11 -->
        const image = document.getElementById("image");
        let angle = 0;
        function rotateImage(){
            angle += 0.3;
            image.style.transform = `rotate(${angle}deg)`;
            requestAnimationFrame(rotateImage);
        }
        rotateImage();

// <!-- js anh2  -->
            const image2 = document.getElementById("image2");
            let scale2 = 1;
            let growing = true;
    
            function animateImage() {
                if (growing) {
                    scale2 += 0.03;
                    if (scale2 >= 1.5) growing = false;
                } else {
                    scale2 -= 0.033;
                    if (scale2 <= 1) growing = true;
                }
                
                image2.style.transform = `scale(${scale2})`;
                setTimeout(animateImage, 100);
            }
            animateImage();
// su lys from tim kiem 
let chevronday = document.querySelectorAll("#chevronday>i");
let range = document.getElementById("range")
range.style.display = "none"
// console.log(chevronday);
chevronday[1].style.display = "none";
function fromsearch_day(){

    if (range.style.display == "block") {
        range.style.display = "none";
        chevronday[1].style.display = "none";
        chevronday[0].style.display = "block";
    } else {
        range.style.display = "block";
        chevronday[1].style.display = "block";
        chevronday[0].style.display = "none";
    }
}
const slider = document.getElementById("rangenday");
const display = document.getElementById("rangendayvale");

slider.addEventListener("input", function () {
display.textContent = slider.value;
// Bạn có thể dùng slider.value để điều chỉnh âm thanh hoặc làm gì đó
// Ví dụ: audio.volume = slider.value / 100;
});


let chevronprice = document.querySelectorAll("#chevronprice>i");
let range2 = document.getElementById("range2")
range2.style.display = "none"
// console.log(chevronprice);
chevronprice[1].style.display = "none";
function fromsearch_pre(){

    if (range2.style.display == "block") {
        range2.style.display = "none";
        chevronprice[1].style.display = "none";
        chevronprice[0].style.display = "block";
    } else {
        range2.style.display = "block";
        chevronprice[1].style.display = "block";
        chevronprice[0].style.display = "none";
    }
}   
const sliderpre = document.getElementById("rangenpre");
const displaypre = document.getElementById("rangenprevale");

sliderpre.addEventListener("input", function () {
    displaypre.textContent = Number(sliderpre.value).toLocaleString("vi-VN");
});

// service-package2-sanpam
document.addEventListener('DOMContentLoaded' , function(){
    function initServicePackage2(btnLeftelSelect, btnRightSelect, servicePackage2Select, servicePackage2SanpamSelect){
        const btnLeft = document.querySelector(btnLeftelSelect);
        const btnRight = document.querySelector(btnRightSelect);
        const servicePackage2 = document.querySelector(servicePackage2Select);
        const widthservicePackage2 = servicePackage2.scrollWidth ;
        // sản phẩm
        const servicePackage2Sanpam = document.querySelector(servicePackage2SanpamSelect);
        const styleservicePackage2Sanpam = window.getComputedStyle(servicePackage2Sanpam);
        const marginLeftSanpam = parseInt(styleservicePackage2Sanpam.marginLeft);
        const marginRightSanpam = parseInt(styleservicePackage2Sanpam.marginRight);
        const FullWidthSanpham = servicePackage2Sanpam.clientWidth + marginLeftSanpam + marginRightSanpam;
        // console.log(FullWidthSanpham);
        
        let coustSanPhams = document.querySelectorAll(servicePackage2SanpamSelect);
        // console.log(coustSanPhams);
        let scrollLeftwidthspham = 0;
        let setimeuotscroll;
        let isdows = false;
        let originX = 0;
        let scrollStar = 0;
        let scrollmousemove;

        // if(window.innerWidth >= 750){}
            
            let setimeuotspham;
            function setIntervalSpham(){
                setimeuotspham =  setInterval(() => {
                    BtnLeft();
                }, 2000);
            }
            setIntervalSpham();
            function clearTimeoutSpham(){
                clearInterval(setimeuotspham);
            }
            function runScrollTo(elso){
                servicePackage2.scrollTo({
                    left: elso,
                    behavior: "smooth"
                });                
            }
            // console.log(widthservicePackage2 - FullWidthSanpham*3);
            function BtnLeft(){
                scrollLeftwidthspham += FullWidthSanpham;
                if (scrollLeftwidthspham > widthservicePackage2 - FullWidthSanpham*3){
                    scrollLeftwidthspham = 0;
                }
                runScrollTo(scrollLeftwidthspham);
            }
            
            function BtnRight(){
                scrollLeftwidthspham -=FullWidthSanpham;
                if (scrollLeftwidthspham < 0) {
                scrollLeftwidthspham = widthservicePackage2 - FullWidthSanpham*3;
                }
                runScrollTo(scrollLeftwidthspham);
            }
                // let isdows = false;
                // let originX = 0;
                // let scrollStar = 0;
            // Click CHuttoj Vuoots keos scroll
            function scrollleftRight(){
                if(scrollmousemove >scrollLeftwidthspham || scrollmousemove <=scrollLeftwidthspham){
                    if(scrollmousemove >scrollLeftwidthspham){
                        BtnLeft();
                    }
                    if(scrollmousemove <=scrollLeftwidthspham){
                        BtnRight();
                    }
                }
            }
            servicePackage2.addEventListener('mousedown',(e) => {
                document.body.style.userSelect = "none";
                isdows = true;
                originX = e.pageX;
                // console.log(originX);
                scrollStar = servicePackage2.scrollLeft;
            });

            servicePackage2.addEventListener('mouseup',(e) => {
                document.body.style.userSelect = "none";
                isdows = false;
                scrollleftRight();
            });

            servicePackage2.addEventListener('mouseleave',(e) => {
                isdows = false;
                scrollleftRight();
            });
            servicePackage2.addEventListener('mousemove',(e) => {
                if(!isdows){
                    return ;
                }
                let DateX  = e.pageX - originX;

                scrollmousemove = scrollLeftwidthspham - DateX;
                // console.log(DateX);
                servicePackage2.scrollTo({
                    left:scrollmousemove,
                });
                // scrollLeftwidthspham = scroll;
            });

            // console.log(scrollLeft);
            
        btnLeft.addEventListener('click',BtnLeft);
        btnLeft.addEventListener('mouseenter',clearTimeoutSpham);
        btnLeft.addEventListener('mouseleave',setIntervalSpham);
        btnRight.addEventListener('click',BtnRight);
        btnRight.addEventListener('mouseenter',clearTimeoutSpham);
        btnRight.addEventListener('mouseleave',setIntervalSpham);
        coustSanPhams.forEach((el) => {
            el.addEventListener('mouseenter',clearTimeoutSpham);
            el.addEventListener('mouseleave',setIntervalSpham);
        });
    }

    initServicePackage2(
        '#btnleft_service',
        '#btnright_service',
        '.service-package_2',
        '.service-package2-sanpam',
    );
});


// setTimeoutbeautifulstreet 
// document.addEventListener("DOMContentLoaded", function() {
//     const carouselTrack = document.querySelector(".beautifulstreet-bottom .content_beautifulstreet");
//     const sphambeau = document.querySelectorAll(".beautifulstreet-bottom_sanpham");
//     const btnRightbeau = document.querySelector("#btnright_beautifulstreet");
//     const btnLeftbeau = document.querySelector("#btnleft_beautifulstreet");

//     // Kiểm tra xem các phần tử có tồn tại không trước khi tiếp tục
//     if (!carouselTrack || sphambeau.length === 0 || !btnRightbeau || !btnLeftbeau) {
//         console.error("One or more carousel elements not found.");
//         return;
//     }

//     const cardWidth = sphambeau[0].offsetWidth;
//     const cardMarginLeft = parseFloat(window.getComputedStyle(sphambeau[0]).marginLeft);
//     const cardMarginRight = parseFloat(window.getComputedStyle(sphambeau[0]).marginRight);
//     const cardFullWidth = cardWidth + cardMarginLeft + cardMarginRight + 10 ;

//     let currentIndex = 0;
//     let myinterval;

//     function startAutoScroll() {
//         myinterval = setInterval(scrollRight, 2000);
//     }

//     function stopAutoScroll() {
//         clearInterval(myinterval);
//     }

//     function scrollRight() {
//         if (currentIndex < sphambeau.length - 3) {
//             currentIndex++;
//         } else {
//             currentIndex = 0;
//         }
//         updateCarousel();
//     }

//     function scrollLeft() {
//         if (currentIndex > 0) {
//             currentIndex--;
//         } else {
//             currentIndex = sphambeau.length - 3;
//         }
//         updateCarousel();
//     }
    
//     function updateCarousel() {
//         const translateXValue = -currentIndex * cardFullWidth;
//         carouselTrack.style.transform = `translateX(${translateXValue}px)`;
//     }

//     // Gắn các sự kiện cho các nút điều khiển
//     btnRightbeau.addEventListener("click", scrollRight);
//     btnLeftbeau.addEventListener("click", scrollLeft);

//     // Dừng tự động cuộn khi di chuột vào carousel
//     carouselTrack.addEventListener('mouseenter', stopAutoScroll);
//     carouselTrack.addEventListener('mouseleave', startAutoScroll);
//     btnRightbeau.addEventListener('mouseenter', stopAutoScroll);
//     btnRightbeau.addEventListener('mouseleave', startAutoScroll);
//     btnLeftbeau.addEventListener('mouseenter', stopAutoScroll);
//     btnLeftbeau.addEventListener('mouseleave', startAutoScroll);

//     // Bắt đầu tự động cuộn khi trang được tải
//     startAutoScroll();
// });

// element trang scroll
var contentArea = document.querySelector('.content-area');
// console.log(contentArea.scrollHeight);
const imgBackgraubody = document.querySelector('.imgbackgraubody');
//  herolayout 
const heroContent = document.querySelector('.hero-content');
const heroImg = document.querySelector('.hero-img');

const heroImgBoxs = document.querySelectorAll('.hero-img_box');
const heroStyle1 = document.querySelector('.hero-style1');
// elementor-from
const elementorFrom = document.querySelector('.elementor-from');
//   Essential-Tips 
const maybayjs = document.querySelector('.maybayjs');
const EssentialTips1text = document.querySelector('.Essential-Tips1_text');
const EssentialTips2Els = document.querySelectorAll('.Essential-Tips_2>*');
//<!-- Essential-Tips -->
const EssentialTips1 = document.querySelector('.service-package_1');
const EssentialTips2 = document.querySelector('.service-package_2');

// elemtnt đầu 
if(EssentialTips1 || EssentialTips2){
    EssentialTips1.style.transform = `translateX(200%)`;
    EssentialTips2.style.transform = `scale(0.01)`;
}
if ((elementorFrom.getBoundingClientRect().top) < window.innerHeight) {
    elementorFrom.style.transform = `scale(1)`;
}
// heroContent.addEventListener("mousemove", function(event) {
//     console.log("X:", event.clientX, "Y:", event.clientY);
// });


// herolayout
function Seteimeuot(){
    setTimeout(() =>{
        if(heroContent || heroImg || heroStyle1){
            heroContent.style.transform = `translateY(0px)`;
            function heroImginter(){
                heroImg.style.transform = `translateY(0px)`;
                heroImg.style.opacity = `1`;
            }
            heroImginter();
            heroStyle1.classList.add('ani');
        }
    }, 100);
}
Seteimeuot();
// scrool
    contentArea.addEventListener('scroll', function(){
        requestAnimationFrame(()=> {
        // herolayout
        // console.log(contentArea.scrollTop);
        if (heroContent.getBoundingClientRect().top < window.innerHeight) {
            heroContent.style.transform = `translateY(${contentArea.scrollTop / 8}px)`;
            // heroImg.style.transform = `translateY(${contentArea.scrollTop / 8}px)`;
            imgBackgraubody.style.transform = `translateY(-${contentArea.scrollTop / 2}px)`;
        }
        // hiệu ứng trượt hẻolay out iamhg
        function TranfromlYImgHerolayout(el){
            let itemtimgels = el.querySelectorAll('.image-hero_item');

            let HeiWinDow = window.innerHeight;
            let HeightEl = el.clientHeight;
            let HeightEltop = el.getBoundingClientRect().top;
            itemtimgels.forEach(function(item){
                let HeightItemtop = el.getBoundingClientRect().top;
                if (HeightEltop < 0) {
                        item.style.transform = `translateY(${-(HeightEltop / 1.5) }px)`;
                }

                if ((HeightEl + HeightEltop) > HeiWinDow) {                    
                        item.style.transform = `translateY(${-(((HeightEl + HeightEltop) - HeiWinDow) / 1.5)}px)`;
                }

                if ((HeightEl + HeightEltop) < HeiWinDow &&  HeightEltop > 0) {
                    item.style.transform = `translateY(0px)`;
                }
            });
        }

        heroImgBoxs.forEach(function(el){
            TranfromlYImgHerolayout(el)
        });
        //elementor-from            
        // console.log(contentArea.scrollTop - elementorFrom.getBoundingClientRect().top);
            if ((elementorFrom.getBoundingClientRect().top) < window.innerHeight) {
                elementorFrom.style.transform = `scale(1)`;
            }
            
        // Essential-Tips 
        // Essential-Tips 1
            if ((EssentialTips1text.getBoundingClientRect().top) < window.innerHeight) {
                EssentialTips1text.style.transform = `translateX(0px)`;
                maybayjs.style.transform = `translateX(${EssentialTips1text.getBoundingClientRect().top}px)`;
            }
            // Essential-Tips 2
            EssentialTips2Els.forEach(function(el){
                if (el.getBoundingClientRect().top < window.innerHeight) {
                    el.style.transform = `translateY(0px)`;
                }
            });

            //<!-- Essential-Tips -->
            if(EssentialTips1.getBoundingClientRect().top < window.innerHeight){
                EssentialTips1.style.transform = `translateY(0px)`;
            }

            if(EssentialTips2.getBoundingClientRect().top < window.innerHeight){
                EssentialTips2.style.transform = `scale(1)`;
            }
        });
    });





    // getBoundingClientRect  lấy vị trí cuar elament


    








