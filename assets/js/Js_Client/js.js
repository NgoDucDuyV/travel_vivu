//Theo dõi sự kiện cuộn trang
var contentArea = document.querySelector(".content-area");
var scrollBtn = document.querySelector(".srollbtn");
if (scrollBtn && contentArea) {
  contentArea.addEventListener("scroll", function () {
    const scrollY = contentArea.scrollTop;
    if (scrollY > window.innerHeight / 2) {
      scrollBtn.style.opacity = "1";
      scrollBtn.style.bottom = "10%";
      header_retunr.classList.add("header_retunrOn");
      header_retunr.classList.remove("header_retunrOf");
    } else {
      scrollBtn.style.opacity = "0";
      scrollBtn.style.bottom = "30%";
      header_retunr.classList.add("header_retunrOf");
      header_retunr.classList.remove("header_retunrOn");
      headerjs.classList.add("headerOn");
      headerjs.classList.remove("headerOf");
    }
  });

  function scrollbtnTop() {
    contentArea.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  }

  // Sự kiện click để cuộn lên đầu
  scrollBtn.addEventListener("click", scrollbtnTop);
}
