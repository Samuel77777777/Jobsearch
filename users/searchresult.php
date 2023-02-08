


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
	
        
  <div class="card" style="float: left; margin: 20px;" align="center">
  <img src="../admin/images/<?php echo $row['filename']; ?>" style="width: 250px;">
  <h2 class="card-title"><?php echo $row["username"]; ?></h2>
  <h5 class="text-info h6"><?php echo $row["specialization"]; ?></h5>
  <h5 class="text-info h6"><?php echo $row["skills"]; ?></h5>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button onClick="sendMail(); return false" class="btn" style="width: 50%">Hire</button></p>
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $row['id'] ?>">
  View More
</button></p>
</div>


           
         
           
           <!-- Modal -->
<div id="modal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


	   
	 
	   


  <?php }
  ?>
 </ul>
</div>
</div> 
<?php }

?>
</body>
<footer><!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap-min.js"></script>
<script src="app.js"></script></footer>
</html>





