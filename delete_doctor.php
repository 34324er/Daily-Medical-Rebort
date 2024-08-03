<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/delete_doctor.css">
    <title>Delete doctor</title>
</head>
<body>

    <div class="container">

        <center>
    <form action="delete_doctor.php" method="post">
        <input type="text" name="name" placeholder="Enter name to delete"><input type="submit" value="Delete" name="delete">
    </form>
    </center>
    </div>
</body>
</html>
<?php
if (   isset( $_POST['delete']  ) ){
  $e = $_POST['name'];
  $del = "delete from add_doctor where name='$e'";
  $run = mysqli_query($con, $del);
  if ($run){
    echo '<script>alert("تم الحذف.")</script>';
    echo '<script>window.open("delete_doctor.php", "_self")</script>';
  }
}
?>