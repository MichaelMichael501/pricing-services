const infoDiv = document.getElementById("personalInformation");
const educDiv = document.getElementById("educationalBackground");
const expDiv = document.getElementById("workExperience");
const accountDiv = document.getElementById("account");
const nextBtn = document.getElementById("next");
const edunextBtn = document.getElementById("eduNext");
const edubackBtn = document.getElementById("eduBack");
const expbackBtn = document.getElementById("workexpBack");
const expnextBtn = document.getElementById("workexpNext");
//const backBtn = document.getElementById("back");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const birthDay = document.getElementById("birthdayDate");
const email = document.getElementById("emailAddress");
const contactNumber = document.getElementById("phoneNumber");



nextBtn.addEventListener("click", function () {
    if(firstName.value !=="" && lastName.value !=="" && birthDay.value!=="" && email.value !=="" && contactNumber !==""){
        infoDiv.style.display="none";
        educDiv.style.display="block";
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Smooth scrolling animation
        });
    
    }
    else{

        if(firstName.value ===""){
            firstName.style.borderColor="red";
            firstName.focus();
        }
        if(lastName.value===""){
            lastName.style.borderColor="red";
            lastName.focus();
        }
        if(birthDay.value ===""){
            birthDay.borderColor="red";
            birthDay.focus();
        }
        if(email.value===""){
            email.borderColor="red";
            email.focus();
        }
        if(contactNumber===""){
            contactNumber.borderColor="red";
            contactNumber.focus();
        }
    }


});

edunextBtn.addEventListener("click", function () {
    educDiv.style.display="none";
    expDiv.style.display="block";
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scrolling animation
    });

});

expbackBtn.addEventListener("click", function () {
    educDiv.style.display="block";
    expDiv.style.display="none";
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scrolling animation
    });

});

expnextBtn.addEventListener("click", function () {
    accountDiv.style.display="block";
    expDiv.style.display="none";
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scrolling animation
    });

});


edubackBtn.addEventListener("click", function () {
    infoDiv.style.display="block";
    educDiv.style.display="none";
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scrolling animation
    });

});

// Attach event listeners to the password inputs and checkboxes
$(document).ready(function() {
  $("#password, #confirmPassword, #term, #privacy").on("input change", function() {
    checkPasswordMatch();
  });

  // Existing AJAX code for checking username existence
  $("#username").on("input", function() {
    const username = $(this).val();
    const usernameFeedback = $("#username-feedback");
    if (username === "") {
      usernameFeedback.text(""); // Clear the feedback message if the username is empty
      checkPasswordMatch(); // Check password match after clearing the username field
    } else if (username.length >= 8) {
      $.ajax({
        type: "POST",
        url: "../sample/assets/process/check_username.php", // Replace this with the actual URL of your PHP script
        data: { username: username },
        success: function(response) {
          if (response === "exists") {
            usernameFeedback.text("Username already exists.").css("color", "red");
          } else {
            usernameFeedback.text("Username available.").css("color", "green");
          }
          // Check password match after username response
          checkPasswordMatch();
        },
        error: function() {
          usernameFeedback.text("Error occurred while checking username.").css("color", "red");
          checkPasswordMatch(); // Check password match even if there was an error
        }
      });
    } else {
      usernameFeedback.text("Username must be at least 8 characters long.").css("color", "red");
      checkPasswordMatch(); // Check password match after invalid username input
    }
  });
});

// Function to check if password and confirm password match
function checkPasswordMatch() {
  const passwordInput = $("#password");
  const confirmPasswordInput = $("#confirmPassword");
  const submitButton = $("#send"); // Changed to match the submit button ID "send"
  const termChecked = $("#term").prop("checked");
  const privacyChecked = $("#privacy").prop("checked");
  const usernameFeedback = $("#username-feedback").text();
  const username = $("#username").val(); // Get the value of the username field

  const passwordsMatch = passwordInput.val() === confirmPasswordInput.val();

  if (
    username === '' || // Disable submit if username is empty
    !passwordsMatch ||
    passwordInput.val() === '' ||
    confirmPasswordInput.val() === '' ||
    !termChecked ||
    !privacyChecked ||
    usernameFeedback === "Username must be at least 8 characters long." ||
    usernameFeedback === "Username already exists."
  ) {
    confirmPasswordInput.addClass('password-mismatch');
    submitButton.prop("disabled", true);
  } else {
    confirmPasswordInput.removeClass('password-mismatch');
    submitButton.prop("disabled", false); // Explicitly enable the submit button
  }
}


