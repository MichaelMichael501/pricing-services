<?php
if ($category != "") {
    $devices = mysqli_query($con, "SELECT * FROM `needed_services` WHERE category='$category'");
} else {
    $devices = mysqli_query($con, "SELECT * FROM `needed_services`");
}
?>
<select name="selectDevice" id="selectDevice" class="select-tag">
    <option value=''>-- Select Needs Services --</option>
    <?php
    while ($value = mysqli_fetch_array($devices)) {
        $deviceId = $value['id'];
        $checkService = mysqli_query($con, "SELECT * FROM `pricing` WHERE `device`='$deviceId'");
        $countService = mysqli_num_rows($checkService);
        if ($countService > 0) {
            echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>";
        }
    }
    ?>
</select>
