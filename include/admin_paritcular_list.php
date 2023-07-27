<?php
    $devices = mysqli_query($con, "SELECT * FROM `needed_services`");

?>
<select name="selectParticular" id="selectParticular" class="select-tag">
    <option value=''>-- Select particulars --</option>
    <?php
    while ($value = mysqli_fetch_array($devices)) {
       
            echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
        
    }
    ?>
</select>