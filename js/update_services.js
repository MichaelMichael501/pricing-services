$(document).ready(function () {
    /**** Select Need Services*********************************************/
    $('#selectedType').change(function () {
        var typeId = $(this).val();

        $.ajax({
            url: '../include/needs_service_list.php',
            type: 'POST',
            data: { typeId: typeId },
            success: function (response) {
                $('#services').html(response);

            }
        });
    });
    /**********************************************************************/

});