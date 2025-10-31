// fetApi điều hường
const menuitemAs = document.querySelectorAll(".menu_itemclientaccount a");
const skeletonCardContainer = document.querySelector(
  ".skeleton-card-container"
);
const BASE_URL = "http://localhost/travel_vivu/";
const axios = window.axios;
// console.log(axios);

// document.getElementById("btnDemoMode").addEventListener("click", () => {
//   axios
//     .post(`${BASE_URL}?mode=client&act=btnDemoMode`, {
//       username: "duy",
//       password: 123456,
//     })
//     .then(({ data }) => {
//       console.log("gửi json thành công", data);
//     })
//     .catch(() => {
//       alert("lỗi gửi json không thành công");
//     });
// });

if (menuitemAs) {
  function fetchApi(mode, act) {
    axios
      .get(`${BASE_URL}?mode=${mode}&act=${act}`)
      .then(({ data }) => {
        console.log(data);
        document.querySelector(".content_user").innerHTML = data;
      })
      .catch(() => {
        alert("lỗi điều hướng vui lòng thử lại!");
      });
  }

  menuitemAs.forEach(function (el) {
    el.addEventListener("click", function (e) {
      e.preventDefault();
      const mode = this.dataset.mode;
      const act = this.dataset.act;
      fetchApi(mode, act);
    });
  });
}
