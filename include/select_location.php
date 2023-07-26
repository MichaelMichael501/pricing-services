<?php
$sqllocation=mysqli_query($con,"SELECT * FROM `provinces`");
?>
<h5>Location</h5>
<select class="select-tag form-control-lg" name="location" id="location">
    <?php
    while($res = mysqli_fetch_array($sqllocation)) 
    {  
        echo "<option value='".$res['name']."'>".$res['name']."</option>";  
    }
    ?>    
</select>

