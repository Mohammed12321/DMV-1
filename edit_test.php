<script>
function myFn()
{
  var x = confirm("Are you sure ?");
  if (x)
      return true;
  else
    return false;
}
</script>

<!DOCTYPE html>
<html>
<title>Enter Code</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<style>
body  {
    background-image: url("Images/395E5427-542A-42B0-93E0-66C7E17EDCE0.jpeg");
    background-size: cover;
}
</style>

<center>

	
<h3>

</body>
</html>



</br></br></br></br></br></br>
</head>
<body>


</body>
</html>



<?php
include 'connect.php';

$phone=$_POST['phone'];

$sql = "SELECT * FROM `tbl_phone_code` WHERE (phone=\"$phone\")";
$result = $con->query($sql);


if ($result->num_rows > 0) {

//if already inserted get the id
    while($row = $result->fetch_assoc()) {
 	 
$id=$row["id"]; 
    }
} else {
  
if (empty($phone)) {
    }
else{
$sql = "INSERT INTO `tbl_phone_code`(`phone`) VALUES (\"$phone\")";
$result = $con->query($sql);


//After inserting get the id
$sql = "SELECT * FROM `tbl_phone_code` WHERE (phone=\"$phone\")";
$result = $con->query($sql);
    // output data of each row
    while($row = $result->fetch_assoc()) {
$id=$row["id"]; 
    }









}//end else

}//end if $results




$sql = "SELECT * FROM `tbl_dmv` WHERE id like \"$id\"  ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

 	$license_plate=$row["license_plate"]; 

?>

<center>

<form action="edit.php" name="myForm"  method="post">
<input type="hidden" size="40" value="<?php echo "$id"; ?>" name="id"  style="width:320px; height: 50px;" >
<input type="hidden" size="40" value="<?php echo "$phone"; ?>" name="phone"  style="width:320px; height: 50px;" >

<input type="text" size="40" value="<?php echo "$license_plate"; ?>" name="license_plate"  style="width:320px; height: 50px;" >
<button Onclick="return myFn();" type="submit" name="delete" value="Delete" style="width:320px; height: 50px;">Delete</button>
</form>
</center>


<?php
}//end of while
}//end of (if result >0)
?>


<form action="edit.php" name="myForm"   method="post">
<input type="hidden" size="40" value="<?php echo "$id"; ?>" name="id"  style="width:320px; height: 50px;" >
<input type="hidden" size="40" value="<?php echo "$phone"; ?>" name="phone"  style="width:320px; height: 50px;" >

<input type="text" size="40" placeholder="New license plate" name="license_plate"  style="width:320px; height: 50px;" required>
<button Onclick="return myFn();" type="submit" name="insert_edit" value="Insert" style="width:320px; height: 50px;">Add new car</button>
</form></br>


<form action="edit.php" name="myForm"   method="post">
<input type="hidden" size="40" value="<?php echo "$id"; ?>" name="id"  style="width:320px; height: 50px;" required>
<input type="text" size="40" placeholder="Enter new phone number" name="phone"  style="width:320px; height: 50px;" required>
<button Onclick="return myFn();" type="submit" name="change" value="Insert" style="width:320px; height: 50px;">change phone number</button>
</form></br>


<form action="index.html" name="myForm"  method="post">
<input type="submit" value="Main menu" style="width:320px; height: 50px;">

</form>



</h3>	
</center>
</html>

