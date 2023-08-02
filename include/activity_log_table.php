<div class="container">
<?php
$userId = $_GET['userId'];
$accountInfo = @mysqli_query($con, "SELECT * FROM `account_information` WHERE `id`='$userId'");
$name = mysqli_fetch_array($accountInfo)
?>
<h2><?php echo $name['first_name']." ".$name['middle_name']." ".$name['last_name']?></h2>
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
        
        $activityLog = @mysqli_query($con, "SELECT * FROM `activity_log` WHERE `account_id`='$userId'");
        while ($value = mysqli_fetch_array($activityLog)) {
            echo "<li class='table-row'>";
            echo "<div class='col col-1' data-label='Id'>".$value['id']."</div>";
            echo "<div class='col col-2' data-label='Device/Requisite'>".$value['activity']."</div>";
            echo "<div class='col col-3' data-label='Type'>".$value['date']."</div>";
            echo "</li>";
        }
        ?>
        </div>
    </ul>
</div>