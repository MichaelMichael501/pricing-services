$(document).ready(function () {
    $('#selectDevice').change(function () {
        var selectedDevice = $(this).val();

        $.ajax({
            url: 'include/type_particular.php',
            type: 'POST',
            data: { Device: selectedDevice },
            success: function (response) {
                $('#selectType').html(response);
            }
        });
    });
});