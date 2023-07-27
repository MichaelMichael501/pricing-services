$(document).ready(function () {
    //Add type
    $('#addType').click(function () {
        var deviceId = $('#selectDevice').val();
        var type = $('#typeField').val();
        var files = $('#myFileInput').prop('files');
    
        var formData = new FormData();
        formData.append('deviceId', deviceId);
        formData.append('typeName', type);
        formData.append('file', files[0]); // Assuming only a single file is selected
    
        $.ajax({
            url: '../process/add_type.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response);
                location.reload();
            }
        });
    });

    //Add Device
    $('#addDevice').click(function () {
        var deviceName = $('#deviceField').val();
        var category = $('#category').val();

        $.ajax({
            url: '../process/add_device.php',
            type: 'POST',
            data: { deviceName: deviceName, category: category },
            success: function (response) {
                alert(response);
                location.reload();

            }
        });
    });

    //add Services
    $('#addServices').click(function () {
        var serviceName = $('#serviceField').val();

        $.ajax({
            url: '../process/add_services.php',
            type: 'POST',
            data: { serviceName: serviceName },
            success: function (response) {
                alert(response);
                location.reload();

            }
        });
    });



    //Create Services 
    $('#createServices').click(function () {
        var type = $('#selectedType').val();
        var services = $('input[name="selectedItems"]:checked').val();
        var price = $('#fee').val();

        $.ajax({
            url: '../process/add_services.php',
            type: 'POST',
            data: { selectedType: type, selectedServices: services, inputFee: price },
            success: function (response) {
                alert(response);
                location.reload();

            }
        });
    });

    //Show available services list  
    $('#selectedType').change(function () {
        var typeId = $(this).val();

        $.ajax({
            url: '../include/services_list.php',
            type: 'POST',
            data: { typeId: typeId },
            success: function (response) {
                $('#services').html(response);

            }
        });
    });


});