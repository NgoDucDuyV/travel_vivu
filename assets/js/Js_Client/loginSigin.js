// checked password
const checkkeds = document.querySelectorAll(".checkpasswrod");
const passwordInputs = document.querySelectorAll('input[type="password"]');
if (checkkeds || passwordInputs) {
  function checkedPass() {
    passwordInputs.forEach((input) => {
      if (this.checked) {
        input.type = "text";
      } else {
        input.type = "password";
      }
    });
  }
  checkkeds.forEach((el) => {
    el.addEventListener("click", checkedPass);
  });
}

// signup
const fromsignup = document.getElementById("fromsignup");
console.log(fromsignup);
if (fromsignup) {
  fromsignup.addEventListener("submit", (e) => {
    e.preventDefault();
    signup();
  });
}

const signup = () => {
  axios
    .post(`${BASE_URL}?mode=client&act=sigin`, {
      username: document.getElementById("username").value,
      email: document.getElementById("email").value,
      password: document.getElementById("password").value,
    })
    .then(({ data }) => {
      console.log("signup thành công", data);
      document.getElementById("errorsignup").innerHTML = `
        <p class="font-medium text-sm ${
          data.success
            ? "bg-blue-100 border border-blue-400 text-blue-700"
            : "bg-red-100 border border-red-400 text-red-700"
        } px-4 py-3 rounded relative mb-6">
          ${data.errorsigin}
        </p>`;
      if (data.success) {
        document.getElementById("username").value = "";
        document.getElementById("email").value = "";
        document.getElementById("password").value = "";
      }
      if (data.success) {
        window.location.replace(`${data.redirect}`);
      }
    })
    .catch(() => {
      console.log("signup không thành công");
    });
};

// login
const formlogin = document.getElementById("formlogin");
console.log(formlogin);
if (formlogin) {
  formlogin.addEventListener("submit", (e) => {
    e.preventDefault();
    login();
  });
}

const login = () => {
  console.log(1);
  axios
    .post(`${BASE_URL}?mode=client&act=login`, {
      username: document.getElementById("login_email").value,
      password: document.getElementById("login_password").value,
    })
    .then(({ data }) => {
      console.log("gửi dữ liệu thành công", data);
      document.getElementById("errorlogin").innerHTML = `
        <p class="font-medium text-sm ${
          data.success
            ? "bg-blue-100 border border-blue-400 text-blue-700"
            : "bg-red-100 border border-red-400 text-red-700"
        } px-4 py-3 rounded relative mb-6">
          ${data.errorlogin}
        </p>`;

      if (data.success) {
        document.getElementById("login_email").value = "";
        document.getElementById("login_password").value = "";

        window.location.replace(`${data.redirect}`);
      }
    })
    .catch(() => {
      console.log("login thất bại");
    });
};
