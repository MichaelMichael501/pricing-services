const selectTag = document.getElementById('category');
const labelToUpdate = document.getElementById('labelToUpdate');

// Add an event listener to the select tag
selectTag.addEventListener('change', () => {
    // Get the selected option's value
    const selectedValue = selectTag.value;

    // Update the label text based on the selected option's value
    if (selectedValue === 'Electronics/Appliances') {
        labelToUpdate.textContent = 'What devices need servicing?';
    } else if (selectedValue === 'Electrical') {
        labelToUpdate.textContent = 'Which electrical devices need servicing?';
    } else if (selectedValue === 'Construction') {
        labelToUpdate.textContent = 'What kind of construction service';
    } else if (selectedValue === 'RMS') {
        labelToUpdate.textContent = 'What devices need servicing?';
    } else {
        labelToUpdate.textContent = 'Please select an option';
    }
});