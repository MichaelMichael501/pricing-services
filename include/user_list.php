<div class="container-account">
    <h2>AyusinKo Services List</h2>
    <div class="account-row">
        <input id="searchInput" class="search-filter" type="text" placeholder="Search by service">
        <select class="select-filter" id="columnSelect">
            <option value="col-1">Id</option>
            <option value="col-2">Name</option>
            <option value="col-3">Address</option>
            <option value="col-4">Gender</option>
            <option value="col-5">Position</option>
        </select>
        <a href="add_account.php"><button type='submit' class='remove-btn'>Add User</button></a>
        <form action="" method="post" id="updateAccount" class="update-form">
            <button type='submit' class='remove-btn'>Update</button>
        </form>
        
    </div>
    <ul class="responsive-table">
        <li class="table-header">
            <div class="col col-7"></div>
            <div class="col col-1">Id</div>
            <div class="col col-2">Name</div>
            <div class="col col-3">Address</div>
            <div class="col col-4">Gender</div>
            <div class="col col-5">Position</div>
            <div class="col col-6">Action</div>
            <div class="col col-8">Activity Log</div>
        </li>
        <div class="table-over">
            <?php
            $servicesList = @mysqli_query($con, "SELECT * FROM `account_information`");
            while ($value = mysqli_fetch_array($servicesList)) {

                echo "<form action='../process/remove_account.php' method='post'><li class='table-row'>";
                echo "<input type='hidden' name='serviceId' id='serviceId' value='" . $value['id'] . "'>";
                echo "<div class='col col-7' data-label='Id'><input type='radio' name='selectedAccount' id='selectedAccount' value='" . $value['id'] . "' form='updateAccount'></div>";
                echo "<div class='col col-1' data-label='Id'>" . $value['id'] . "</div>";
                echo "<div class='col col-2' data-label='Name'>" . $value['first_name'] . " " . $value['middle_name'] . " " . $value['last_name'] . "</div>";
                echo "<div class='col col-3' data-label='Address'>" . $value['address'] . "</div>";
                echo "<div class='col col-4' data-label='Gender'>" . $value['gender'] . "</div>";
                echo "<div class='col col-5' data-label='Position'>" . $value['position'] . "</div>";
                echo "<div class='col col-6' data-label='Action'><button type='submit' class='remove-btn'>Remove</button></div>";
                echo "<div class='col col-8' data-label='Action'><a href='user_activity_log.php?userId=".$value['id']."'><button class='remove-btn'>View</button></a></div>";
                echo "</li></form>";
            }
            ?>
        </div>
    </ul>
</div>