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


                
    /**** Select The Type of Need Services**********************************/
    $('#selectServices').change(function () {
        var core = $(this).val();

        $.ajax({
            url: '../include/device_type.php',
            type: 'POST',
            data: { Device:core  },
            success: function (response) {
                $('#selectTypeField').html(response);

    /**** Show all data of Selected Services ******************************************************************/
                $('#showServices').click(function() {
                    var selectedType = $('#selectType').val();
          
                    $.ajax({
                      url: '../include/update_value_price.php',
                      type: 'POST',
                      data: { selectedType: selectedType },
                      success: function(response) {
                        $('#servicesField').html(response);
                        
                      }
                    });
                  });

            }
            
    /**********************************************************************/
        });
    });
    /**********************************************************************/


            }
        });
    });
    /**********************************************************************/


});