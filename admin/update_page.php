<?php include('../db.php'); ?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

 
        $query = "select * from `graduates` where `id` = '$id' ";

        $result = mysqli_query($con, $query);

        if(!$result){
            die("query failed".mysqli_error());
        }
        else{
            $row = mysqli_fetch_assoc($result);

          
               
    }

}

?>
<?php
    if(isset($_POST['update_graduates'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
        }

        $username = $_POST['username'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $description = $_POST['description'];
        $skills = $_POST['skills'];
        $specialization = $_POST['specialization'];
        $image = $_POST['image'];
        

    $query = "update `graduates` set `username` = '$username', `address` = '$address', `dob` = '$dob', `email` = '$email', `phone` = '$phone', `description` = '$description', `skills` = '$skills', `specialization` = '$specialization', `filename` = '$image'  where `id` = '$idnew'";

    $result = mysqli_query($con, $query);

    if(!$result){
        die("query failed".mysqli_error());
    }
    else{
        header('location:create.php?update_msg=Record updated successfully');
    }
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
    <title>Update Page</title>
</head>
<body style="height: 1000px">
<?php include('admin_header.php'); ?>
<br>
<br>
<br>

<form action="update_page.php?id_new=<?php echo $id; ?>" method="post" style="width: 500px; margin-right:auto; margin-left:auto; height: 1000px; font: size 19px; " id="frm">
<div class="form-group">
                <label for="username">Name of graduate</label>
                <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?> ">

                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?> ">

                <label for="dob">Date of Birth</label>
                <input type="text" name="dob" class="form-control" value="<?php echo $row['dob']; ?> ">

                <label for="email">Email Address</label>
                <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?> ">

                <label for="phone">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?> ">

                <label for="description">A Brief Description</label>
                <input type="text" name="description" class="form-control" value="<?php echo $row['description']; ?> ">

                <label for="skills">Skills</label>
                <input type="text" name="skills" class="form-control" value="<?php echo $row['skills']; ?> ">

                <label for="specialization">Specialization</label>
                <input type="text" name="specialization" class="form-control" value="<?php echo $row['specialization']; ?> ">
                <br>

                <div class="custom-file">
                <label class="custom-file-label" for="customFile" for="image">Upload An Image</label>
                <input type="file" class="custom-file-input" id="customFile" name="image" value="<?php echo $row['image']; ?> ">
                
                </div>

            </div>
            <input type="submit" class="btn btn-success" name="update_graduates" value="UPDATE">
</form>

</body>
</html>

