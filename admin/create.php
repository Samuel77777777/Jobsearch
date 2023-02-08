<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>
<?php include('../db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  
    <title>Document</title>
</head>
<body>
  
    <?php echo  $_SESSION['username'] ?>
    <button type="button" class="btn btn-dark" m-4 p-4>
        <a href="../logout.php">Logout</a>
     </button>

    <div class="box1">
       
        


        <!-- Button to Open the Modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
  Add A New Graduate Record
</button>
    </div>
    <div class="table-responsive-lg">
    <table class="table table-striped table-hover vertical-align" style="width: 500px">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Description</th>
        <th scope="col">Skills</th>
        <th scope="col">Specialization</th>
        <th scope="col">Image</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
    </thead>
    <tbody>
        <?php
        $query = "select * from `graduates`";

        $result = mysqli_query($con, $query);

        if(!$result){
            die("query failed".mysqli_error());
        }
        else{
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['skills']; ?></td>
                    <td><?php echo $row['specialization']; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

                <?php
            }
        }


        ?>
    </tbody>
    </table>
    </div>
    <?php
        if(isset($_GET['message'])){
            echo  "<h6 class='h6'>".$_GET['message']."</h6>";
        }

    ?>
      <?php
        if(isset($_GET['insert_msg'])){
            echo  "<h6 class='h'>".$_GET['insert_msg']."</h6>";
        }
        ?>

        <?php
        if(isset($_GET['update_msg'])){
            echo  "<h6 class='h'>".$_GET['update_msg']."</h6>";
        }
        ?>
         <?php
        if(isset($_GET['delete_msg'])){
            echo  "<h6 class='h'>".$_GET['delete_msg']."</h6>";
        }
        ?>


<form action="insert_data.php" method="post" enctype="multipart/form-data">
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add A New Graduate Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
            <div class="form-group">
                <label for="username">Name of graduate</label>
                <input type="text" name="username" class="form-control">

                <label for="address">Address</label>
                <input type="text" name="address" class="form-control">

                <label for="dob">Date of Birth</label>
                <input type="text" name="dob" class="form-control">

                <label for="email">Email Address</label>
                <input type="text" name="email" class="form-control">

                <label for="phone">Phone Number</label>
                <input type="text" name="phone" class="form-control">

                <label for="description">A Brief Description</label>
                <input type="text" name="description" class="form-control">

                <label for="skills">Skills</label>
                <input type="text" name="skills" class="form-control">

                <label for="specialization">Specialization</label>
                <input type="text" name="specialization" class="form-control">
                <br>
               <label for="image">Upload Image</label>
               <input type="file" name="uploadfile" class="form-control" value="">

            </div>
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_graduates" id="insert" value="ADD GRADUATE">
      </div>

    </div>
  </div>
</div>
</form>
<div class="msg">
            <strong>
		<?php if(isset($error)){echo $error;}?>
	</strong>
			</div>
		</div>

</body>
</html>


