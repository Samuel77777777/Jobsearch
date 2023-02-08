<?php include('../db.php'); ?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }


    $query = "delete from `graduates` where `id` = '$id' ";

    $result = mysqli_query($con, $query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }
    else{
        header('location:create.php?delete_msg=Record deleted successfully');
    }





?>