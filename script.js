let form = document.querySelector("#registration-form");
let username = document.getElementById("username");
let fullName = document.getElementById("fullName");
let birthDate = document.getElementById("birthDate");
let address = document.getElementById("address");
let phone = document.getElementById("phone");
let image = document.getElementById("userImage");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirmPassword");
function validateForm() {
  if (
    username.value === "" ||
    fullName.value === "" ||
    birthDate.value === "" ||
    address.value === "" ||
    phone.value === "" ||
    !image.value ||
    email.value === "" ||
    password.value === "" ||
    confirmPassword.value === ""
  ) {
    alert("Please fill all fields...!!!!!!");
    return false;
  }
  if (password.value != confirmPassword.value) {
    alert("Password did not match with confirm password...!!!!!!");
    return false;
  }
  if (password.value.length < 8) {
    alert("Password should be at least 8 character in length...!!!!!!");
    return false;
  }
  let regex = /^(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{8,}$/;
  if (!password.value.match(regex)) {
    alert(
      "Password should contain at least one special character and one number...!!!!!!"
    );
    return false;
  }
  return true;
}
form.addEventListener("submit", function (e) {
  e.preventDefault(); // prevents the default form submission behavior
  // Client-Side Validation
  if (!validateForm()) {
    return;
  }
  console.log("form submitted");
  var xhr = new XMLHttpRequest();
  var formData = new FormData(form);

  xhr.onload = function () {
    if (xhr.status === 200 && xhr.readyState === 4) {
      console.log(xhr.response);
      let response = JSON.parse(xhr.response);
      let img = document.querySelector(".img");
      // server-side validation failed, display error message
      let imgMsg = response.imgMsg;
      let formMsg = response.formMsg;
      let imageError = document.createElement("p");
      let imageErrorText = document.createTextNode(imgMsg);
      imageError.appendChild(imageErrorText);
      img.appendChild(imageError);
      let formError = document.createElement("p");
      let formErrortext = document.createTextNode(formMsg);
      formError.appendChild(formErrortext);
      form.appendChild(formError);
    } else {
      // display an error message to the user
      alert("An error occurred while submitting the form");
    }
  };
  xhr.open("POST", "./src/controllers/userController.php", true);
  xhr.send(formData);
});
