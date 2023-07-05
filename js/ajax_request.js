$(document).ready(function() {
    $('#selectDevice').change(function() {
      var selectedDevice = $(this).val();
  
      $.ajax({
        url: 'include/device_type.php',
        type: 'POST',
        data: { Device: selectedDevice },
        success: function(response) {
          $('#result').html(response);
          
          // Register the event handler for the newly generated "selectType" element
          $('#selectType').change(function() {
            var selectedType = $(this).val();
  
            $.ajax({
              url: 'include/services.php',
              type: 'POST',
              data: { Device: selectedType },
              success: function(response) {
                $('#services').html(response);
                
                
                $('#showPrice').click(function() {
                  var selectedType = $('#selectServices').val();
        
                  $.ajax({
                    url: 'include/device_price.php',
                    type: 'POST',
                    data: { Device: selectedType },
                    success: function(response) {
                      $('#price').html(response);
                      
                    }
                  });
                });
              }
            });
          });
        }
      });
    });
  });