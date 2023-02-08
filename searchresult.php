<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>


<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="open_styles.css">
<link rel="stylesheet" href="css/style.css">
<style>
  .btns{
    display:flex;
    justify-content:space-between;
    margin:5px;
  }
  
.btns button {
  text-decoration: none;
  font-size: 1.3rem;
  padding: 13px 30px;
  font-weight: 600;
  background-color: white;
  font-weight: 600;
  border-radius: 5px;
  margin:5px;

}

.btn button.blue {
  color: #fff;
  background-color: #ff7900;
  transition: 0.3s ease;
 
}
.btn button.blue:hover {
  color: #ff7900;
  background-color: #fff;
}

.btns button.blue {
  color: #fff;
  background-color: #ff7900;
  transition: 0.3s ease;
}

.btns button.blue:hover {
  color: #ff7900;
  background-color: #fff;
}
.btns button.yellow {
  color: #ff7900;
  background-color: #000;
  color: #fff;
  transition: 0.3s ease;
}

.btns button.yellow:hover {
  color: #ff7900;
  background-color: #fff;
}

</style>

</head>
<body>











	<?php
require ('config.php');
$return = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "SELECT * FROM graduates
	WHERE id  LIKE '%".$search."%'
	OR skills LIKE '%".$search."%' 
	OR specialization LIKE '%".$search."%' 
	";}
else
{
	$query = "SELECT * FROM graduates ORDER BY id ASC";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	?>


	<?php
while($row = mysqli_fetch_array($result)){
	?>


<div class="card" style="float:left; margin:40px;">
  <img src="./admin/images/<?php echo $row['filename']; ?>" style="width: 100%; height:300px;">
  <h2 class="card-title"><?php echo $row["username"]; ?></h2>
  <h5 class="text-info h6"><?php echo $row["specialization"]; ?></h5>
  <h5 class="text-info h6"><?php echo $row["skills"]; ?></h5>
 

 <br>
 <div style="justify-content: space-between; display:flex;" class="btns">
 <button onClick="sendMail(); return false" class="blue" >Hire</button>
  <button type="button" class="yellow" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
  View More
</button>
</div>

</div>


 
    
    



       

<div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body">
      <h5 class="card-title"><?php echo $row["username"]; ?></h5>
    <p class="card-text"><?php echo $row["description"]; ?></p>
    <h5 class="text-info h6"><?php echo $row["skills"]; ?></h5>
    <h5 class="text-info h6"><?php echo $row["specialization"]; ?></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="yellow" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


	   
	 
	   


  <?php }
  ?>
 </div>
</div>
</div> 
<?php }
?>
</body>
<footer><!-- Latest compiled and minified JavaScript -->


<script src="js/bootstrap-min.js"></script>
<script src="app.js"></script></footer>
</html>





