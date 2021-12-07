<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

include "connect.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from name where id ='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];

    $edit = mysqli_query($conn,"update name set fname='$fname', email='$email' where id='$id'");
	
    if($edit)
    {
        header("location:records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="fname" value="<?php echo $data['fname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter Your Email" Required>
  <input type="submit" name="update" value="Update">
</form>





</body>
</html>