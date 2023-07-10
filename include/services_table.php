<div class="container">
    <h2>AyusinKo Services List</h2>
    <input id="searchInput" class="search-filter" type="text" placeholder="Search by service">
    <select class="select-filter" id="columnSelect">
        <option value="col-1">Id</option>
        <option value="col-2">Device/Requisite</option>
        <option value="col-3">Type</option>
        <option value="col-4">Service</option>
        <option value="col-5">Fee</option>
    </select>
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">Id</div>
            <div class="col col-2">Device/Requisite</div>
            <div class="col col-3">Type</div>
            <div class="col col-4">Service</div>
            <div class="col col-5">Fee</div>
            <div class="col col-6">Action</div>
        </li>
        <div class="table-over">
        <?php
        $servicesList = @mysqli_query($con, "SELECT * FROM `pricing`");
        while ($value = mysqli_fetch_array($servicesList)) {
            $requisiteId=$value['device'];
            $typeId=$value['type'];
            $serviceId=$value['services'];
            $requisite=mysqli_query($con,"SELECT * FROM `needed_services` WHERE id='$requisiteId'");
            $reqValue = mysqli_fetch_array($requisite);
            $type=mysqli_query($con,"SELECT * FROM `device_type` WHERE id='$typeId'");
            $typeValue = mysqli_fetch_array($type);
            $services=mysqli_query($con,"SELECT * FROM `services` WHERE id='$serviceId'");
            $serviceValue = mysqli_fetch_array($services);
            echo "<form action='../process/remove_services.php' method='post'><li class='table-row'>";
            echo "<input type='hidden' name='serviceId' id='serviceId' value='".$value['id']."'>";
            echo "<div class='col col-1' data-label='Id'>".$value['id']."</div>";
            echo "<div class='col col-2' data-label='Device/Requisite'>".$reqValue['name']."</div>";
            echo "<div class='col col-3' data-label='Type'>".$typeValue['type']."</div>";
            echo "<div class='col col-4' data-label='Service'>".$serviceValue['name']."</div>";
            echo "<div class='col col-5' data-label='Fee'>".$value['price']."</div>";
            echo "<div class='col col-6' data-label='Action'><button type='submit' class='remove-btn'>Remove</button></div>";
            echo "</li></form>";
        }
        ?>
        </div>
    </ul>
</div>