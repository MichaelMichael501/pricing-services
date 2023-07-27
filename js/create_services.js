$(document).ready(function () {
    $('#selectDevice').change(function () {
        var selectedDevice = $(this).val();

        $.ajax({
            url: 'include/device_type.php',
            type: 'POST',
            data: { Device: selectedDevice },
            success: function (response) {
                $('#result').html(response);
            }
        });
    });
});