<?php
$devices = @mysqli_query($con, "SELECT * FROM `device_type`");
?>
    <select name="selectDevice" id="selectDevice" class="select-tag">
        <option value=''>-- Select Needs Services --</option>
        <?php
        
        while ($value = mysqli_fetch_array($devices)) {
            echo "<option value='" . $value['id'] . "'>" . $value['type'] . "</option>";
        }
        ?>

    </select>
