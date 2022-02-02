/*
const myForm = document.getElementById("myForm");
myForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(this);
  const searchParams = new URLSearchParams();
  const loginEmail = document.getElementById("loginEmail");
  const loginPassword = document.getElementById("loginPassword");

  for (const pair of formData) {
    searchParams.append(pair[0], pair[1]);
  }

  fetch("./authen/userLogin", {
    method: "post",
    body: searchParams,
  })
    .then(function (response) {
      return response.text();
    })
    .then(function (text) {
      if (text !== "success") {
        if (text === "emailIsNull") {
          alert("Request failed. status of " + text);
          loginEmail.focus();
        } else if (text === "passwordIsNull") {
          alert("Request failed. status of " + text);
          loginPassword.focus();
        } else if (text === "emailNotFound") {
          alert("Sorry invalid email");
        } else if (text === "passwordNotMatched") {
          alert("Sorry invalid password");
        } else {
        }
      }
    })
    .catch(function (error) {
      console.error(error);
    });
});
*/
