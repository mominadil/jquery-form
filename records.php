<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

  <h2>Student Details</h2>

  <table border="2">
    <tr>
      <td>id</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Email</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>

    <?php

      include ('connect.php'); 

      $records = mysqli_query($conn,"select * from name"); 

      while($data = mysqli_fetch_array($records))
      {
      ?>
      <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['fname']; ?></td>
        <td><?php echo $data['lname']; ?></td>
        <td><?php echo $data['email']; ?></td>    
        <td><a href="update.php?id=<?php echo $data['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $data['id']; ?>" onclick='return checkdelete()' >Delete</a></td>
        <!-- <?php echo '<script></script>' ?> -->
      </tr> 
      <?php
      }
    ?>
  </table>
<script >
function checkdelete() {
  return confirm('Are you sure');
}
</script>
</body>


  
</html>