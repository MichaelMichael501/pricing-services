<!DOCTYPE html>
<?php
include('../include/include_body.php');
include('../include/authentication.php');
include('../process/config.php');
?>
<? ?>
<html lang="en">

<head>
    <title>Add Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/pricing_service.css">
    <link rel="stylesheet" type="text/css" href="../css/body.css">
    <link rel="stylesheet" type="text/css" href="../css/add_services.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/add_type.js"></script>
    <script src="../js/create_services.js"></script>
</head>

<body>
    <?php echo $adminNavigation; ?>
    <div class="container-add">
        <h3>Add Services</h3>
        <div class="row">
            <!--add particular that needed a services-->
            <div class="add-particulars">
                <h4>Add Particulars</h4>
                <div class="form-select">
                    <select name="category" id="category" class="select-tag">
                        <option value="">-- Select Category --</option>
                        <option value="Electronics/Appliances">Electronics/Applainces</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Construction">Construction</option>
                        <option value="RMS">RMS</option>
                    </select>
                    <br>
                    <label for="category">Category</label>
                    <br>
                </div>
                <div class="form-contain">
                    <input type="text" class="text-field" name="deviceField" id="deviceField">
                    <br>
                    <label for="neededServices" id="labelToUpdate">Select option</label>
                </div>
                <br>
                <button role="button" id="addDevice" name="addDevice" class="add-typebtn">Add</button>
            </div>
            <!--add type of particular-->
            <div class="add-particulars">
                <h4>Add Type</h4>
                <div class="form-select">
                    <?php
                    $category = "";
                    include('../include/device_list.php');
                    ?><br><br>
                    <div class="form-contain">
                        <input type="text" class="text-field" name="deviceField" id="deviceFieldx">
                        <br>
                        <label for="neededServices" id="">Type</label>
                    </div>
                    <br>
                    <input type="file" class="text-field" name="myFileInput" id="myFileInput" accept="image/*">
                    <br>
                    <button role="button" id="addType" name="addType" class="add-typebtn">Add</button>
                    <br>
                    <br>
                </div>
            </div>

            <!--add type services-->
            <div class="add-particulars">
                <h4>Add type of Services</h4>
                <div class="form-contain">
                    <input type="text" class="text-field" name="serviceField" id="serviceField">
                    <br>
                    <label for="neededServices" id="">Type of Service</label>
                </div>
                <br>
                <button role="button" id="addServices" name="addServices" class="add-typebtn">Add</button>
            </div>
        </div>

        <div class="add-services">

            <div class="select-price">
                <h2>Add Services</h2>
                <?php $devices = @mysqli_query($con, "SELECT * FROM `device_type`");
                echo '<select name="selectedType" id="selectedType" class="select-tag">';
                echo "<option value=''>--Select Type--</option>";

                while ($value = mysqli_fetch_array($devices)) {
                    echo "<option value='" . $value['id'] . "'>" . $value['type'] . "</option>";
                }

                echo '</select>';
                ?>
                <br><br>
                <select name="ratePer" id="ratePer" class="select-tag">
                    <option value="">-- Select Rate per --</option>
                    <option value="unit">unit</option>
                    <option value="square feet">ft²</option>
                </select>
                <h5>Rate:</h5>
                <input type="number" id="fee" name="fee" class="add-btn">
                <br>
            </div>

            <div class="choose-services" id="services"></div>
            <div class='add-servicesbtn'><button role="button" id="addServices" name="addServices" class="add-typebtn">Add</button></div>

        </div>


    </div>



<?php 
echo $adminScript;
?>

</body>

