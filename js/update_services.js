$(document).ready(function () {
    /**** Select Need Services*********************************************/
    $('#category ').change(function () {
        var category = $(this).val();

        $.ajax({
            url: '../include/needs_service_list.php',
            type: 'POST',
            data: { category: category },
            success: function (response) {
                $('#selectNeeds').html(response);

            }
        });
    });
    /**********************************************************************/

});