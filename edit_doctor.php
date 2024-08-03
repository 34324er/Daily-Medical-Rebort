<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/edit.css">
    <title>Edit Doctor</title>

</head>
<body>
<center>
        <div class="container">
            <h2>Edit Doctor</h2>
            <form action="edit_doctor.php" method="post"  id="addDoctorForm" >
                <div class="form-group">
                    <label for="doctorName">Doctor Name:</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label for="nationalID">National ID:</label>
                    <input type="text"  name="national" required>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="text"  name="phone" required>
                </div>
                <div class="form-group">
                    <label for="specialization">Specialization:</label>
                    <input type="text"  name="specialty" required>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthdate:</label>
                    <input type="date"  name="birth_date" required>
                </div>
                <button type="submit" name="edit">Edit Doctor</button>
                <button type="submit"> <a href="delete_doctor.php" class="del"style="color:#fff;">Delete Doctor</a></button>
                <button type="submit" ><a href="site_manager.php" class="edit" style="color:#fff;"> Add Doctor</a> </button>
            </form>
        </div>
        </center>
</body>
</html>
<?php
if (   isset( $_POST['edit']  ) ){
  $name = $_POST['name'];
  $national = $_POST['national'];
  $phone = $_POST['phone'];
  $specialty = $_POST['specialty'];
  $birth_date = $_POST['birth_date'];
  
  $edit = "update add_doctor set name='$name' , national='$national' , phone='$phone'
  , specialty='$specialty' , birth_date='$birth_date' where name='$name'";
  $run = mysqli_query($con, $edit);
  if ($run){
    echo '<script>alert("تم التعديل.")</script>';
    echo '<script>window.open("delete.php", "_self")</script>';
  }
}
?>