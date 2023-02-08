<?php include('../db.php'); ?>

<?php
// $error_reporting(0);

$msg = "";
if(isset($_POST['add_graduates'])){
    
    $username = $_POST['username'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $skills = $_POST['skills'];
    $specialization = $_POST['specialization'];
	
	$filename = $_FILES['uploadfile']['name'];
	$tempname = $_FILES['uploadfile']['tmp_name'];
	$folder = "../admin/images/".$filename;
    
    
    
    
    

    

   



    if($username == "" || empty($username)){
        header('location:create.php?message=Enter a username');
    }
    else{
        $query = "insert into `graduates` (`username`,`address`,`dob`,`email`,`phone`,`description`,`skills`,`specialization`,`filename`) values('$username','$address','$dob','$email','$phone','$description','$skills','$specialization','$filename')";

        $result = mysqli_query($con, $query);

        if(move_uploaded_file($tempname, $folder)){
			echo "<h3> Image uploaded successfully</h3>";
		}else{
			echo "<h3> Failed to upload image!</h3>";
		}


        
        if(!$result){
            die("Query Failed".mysqli_error());
			
        }
        else{
            header('location:create.php?insert_msg=Data inserted successfully');
        }
    }



}






?>