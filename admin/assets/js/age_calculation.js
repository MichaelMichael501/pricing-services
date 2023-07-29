function calculateAge() {
    const dobInput = document.getElementById("birthdayDate");
    const dobValue = dobInput.value;
  
    if (dobValue) {
      const today = new Date();
      const dob = new Date(dobValue);
      
      const ageInMilliseconds = today - dob;
      const ageDate = new Date(ageInMilliseconds);
      const age = Math.abs(ageDate.getUTCFullYear() - 1970);
  
      document.getElementById("age").value = age;
    } else {
      document.getElementById("age").value = "Please enter a valid date of birth";
    }
  }