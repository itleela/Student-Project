<?php
session_start();
require 'config.php';

// Fetch Data
$lawyer_id = $_POST['lawyer_id'];
$l_phone = $_POST['l_phone'];
$city = $_POST['city'];
$address = $_POST['address'];


// Query
$insert_sql = "UPDATE  `lawyer` set `l_phone` = '$l_phone', `city` = '$city', `address` = '$address' where id = '$lawyer_id'";
// echo $insert_sql;


if ($conn->query($insert_sql) === TRUE) {
    echo "Data Inserted";
    header('Location:manage_lawyer.php');
} else {
    ?>
    <script type="text/javascript">
        alert("Error In Inserting Resources");
    </script>
    <?php
    header('Location:dashboard.php');
}

?>