<?php
if($category !=""){
$devices = @mysqli_query($con, "SELECT * FROM `needed_services` WHERE category='$category'");}
else{$devices = @mysqli_query($con, "SELECT * FROM `needed_services`");}
?>
    <select name="selectDevice" id="selectDevice" class="select-tag">
        <option value=''>-- Select Needs Services --</option>
        <?php
        
        while ($value = mysqli_fetch_array($devices)) {
            echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
        }
        ?>

    </select>
