<?php
include('connect.php');

// print_r($_POST);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$fileToUpload=$_FILES['fileToUpload']['name'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);




//function createUser($email){
   // $sql = "SELECT count(email) FROM name WHERE email='$email'" ;

   // $result = mysql_result(mysql_query($sql),0) ;

   // if( $result > 0 ){
   //  echo "There is already a user with that email!" ;
   // }//end if

   if($fname ==''||$lname == '' ||$email==''){

    echo "Please fill the value in required field";
}
else{
   



       echo "Succesfully submmited";

    $sql = "INSERT INTO name (fname,lname,email,imageName) 
    VALUES ('$fname','$lname','$email','$fileToUpload')";
    mysqli_query($conn, $sql);


}







?>

