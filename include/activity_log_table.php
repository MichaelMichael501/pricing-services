<div class="container">
    <h2>AyusinKo Services List</h2>
    <input id="searchInput" class="search-filter" type="text" placeholder="Search by service">
    <select class="select-filter" id="columnSelect">
        <option value="col-1">Id</option>
        <option value="col-3">Date</option>
    </select>
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-1">Id</div>
            <div class="col col-2">Log</div>
            <div class="col col-3">Date</div>
        </li>
        <div class="table-over">
        <?php
        $userId = $_GET['userId'];
        $activityLog = @mysqli_query($con, "SELECT * FROM `activity_log` WHERE `appicant_id`='$userId'");
        while ($value = mysqli_fetch_array($servicesList)) {
            echo "<div class='col col-1' data-label='Id'>".$value['id']."</div>";
            echo "<div class='col col-2' data-label='Device/Requisite'>".$reqValue['name']."</div>";
            echo "<div class='col col-3' data-label='Type'>".$typeValue['type']."</div>";
            echo "</li>";
        }
        ?>
        </div>
    </ul>
</div>