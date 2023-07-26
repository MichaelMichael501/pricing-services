<?php

$sqllocation=mysqli_query($con,"SELECT * FROM `provinces`");
?>
<label class="form-label" for="location">Location</label><br>
<select class="form-control form-control-lg" name="location" id="location">
    <?php
    while($res = mysqli_fetch_array($sqllocation)) 
    {  
        echo "<option value='".$res['name']."'>".$res['name']."</option>";  
    }
    ?>    
</select>

