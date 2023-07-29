const infoBtn = document.getElementById("comInfonext");
const infodiv = document.getElementById("comInfo");
const overviewDiv = document.getElementById("overview");
const accountDiv = document.getElementById("accountDiv");
const overviewbtn = document.getElementById("showAccount");
const backinfo = document.getElementById("backDiv");
const backOver = document.getElementById("backOver");
const inputconName = document.getElementById("comName");
const inputOwner = document.getElementById("ownerCeo");
const inputRepresent = document.getElementById("representative");
const inputAdress = document.getElementById("address");
const inputContact = document.getElementById("phoneNumber");
const inputEmail = document.getElementById("emailAddress");

infoBtn.addEventListener("click", function () {
  if (
    inputconName.value !== "" &&
    inputOwner.value !== "" &&
    inputRepresent.value !== "" &&
    inputAdress.value !== "" &&
    inputContact.value !== "" &&
    inputEmail.value !== ""
  ) {
    infodiv.style.display = "none";
    overviewDiv.style.display = "block";
  } else {
    if (inputconName.value === "") {
      inputconName.style.borderColor = "red";
      inputconName.focus();
    }
    if (inputOwner.value === "") {
      inputOwner.style.borderColor = "red";
      inputOwner.focus();
    }
    if (inputRepresent.value === "") {
      inputRepresent.style.borderColor = "red";
      inputRepresent.focus();
    }
    if (inputAdress.value === "") {
      inputAdress.style.borderColor = "red";
      inputAdress.focus();
    }
    if (inputContact.value === "") {
      inputContact.style.borderColor = "red";
      inputContact.focus();
    }
    if (inputEmail.value === "") {
      inputEmail.style.borderColor = "red";
      inputEmail.focus();
    }
  }
});

overviewbtn.addEventListener("click", function () {
  overviewDiv.style.display = "none";
  accountDiv.style.display = "block";
});

backinfo.addEventListener("click", function () {
  infodiv.style.display = "block";
  overviewDiv.style.display = "none";
});

backOver.addEventListener("click", function () {
  overviewDiv.style.display = "block";
  accountDiv.style.display = "none";
});



// Resetting border color to default when there is input
inputconName.addEventListener("input", function () {
  inputconName.style.borderColor = "";
});
inputOwner.addEventListener("input", function () {
  inputOwner.style.borderColor = "";
});
inputRepresent.addEventListener("input", function () {
  inputRepresent.style.borderColor = "";
});
inputAdress.addEventListener("input", function () {
  inputAdress.style.borderColor = "";
});
inputContact.addEventListener("input", function () {
  inputContact.style.borderColor = "";
});
inputEmail.addEventListener("input", function () {
  inputEmail.style.borderColor = "";
});
