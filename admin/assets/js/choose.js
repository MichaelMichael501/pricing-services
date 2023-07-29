const employerShow = document.getElementById("employerBtn");
const applicantShow = document.getElementById("applicantBtn");
const employerLogin = document.getElementById("employerDiv");
const applicantLogin = document.getElementById("applicantDiv");
const chooseDiv = document.getElementById("choose");

employerShow.addEventListener("click", function () {
    employerLogin.style.display = "block";
    chooseDiv.style.display = "none";
});

applicantShow.addEventListener("click", function () {
    applicantLogin.style.display = "block";
    chooseDiv.style.display = "none";
});