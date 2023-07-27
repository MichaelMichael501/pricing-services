// Function to calculate the sum and handle empty text field as zero
function calculateSum() {
    const labelValue = parseFloat(document.getElementById('labelValue').innerText) || 0;
    const textFieldValue = parseFloat(document.getElementById('textFieldValue').value) || 0;
    
    const sum = labelValue + textFieldValue;
  
    document.getElementById('result').innerText = `Result: ${sum}`;
  }
  
  // Attach event listener to the text field to trigger calculation on change
  document.getElementById('textFieldValue').addEventListener('input', calculateSum);
  
  // Calculate the sum on page load (if needed)
  calculateSum();