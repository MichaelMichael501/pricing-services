function calculateSum() {
    const labelValue = parseFloat(document.getElementById('amountValue').value) || 0;
    const textFieldValue = parseFloat(document.getElementById('textFieldValue').value) || 0;
    
    const sum = labelValue * textFieldValue;
    const roundedSum = sum.toFixed(2);

    document.getElementById('perRate').innerHTML = `Total: &#x20B1; ${roundedSum}`;
  }
  
  // Attach event listener to the text field to trigger calculation on change
  document.getElementById('textFieldValue').addEventListener('input', calculateSum);
  
  // Calculate the sum on page load (if needed)
  calculateSum();