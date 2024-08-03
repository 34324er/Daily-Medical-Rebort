<?php
   $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../style/site_manager.css">
    </head>
    <body>
        <center>
        <div class="container">
            <h2>Add Doctor</h2>
            <form action="site_manager.php" method="post"  id="addDoctorForm" >
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
                <button type="submit" name="save">Add Doctor</button>
                <button type="submit"> <a href="delete_doctor.php" class="del"style="color:#fff;">Delete Doctor</a></button>
                <button type="submit" ><a href="edit_doctor.php" class="edit" style="color:#fff;">Edit Doctor</a> </button>
            </form>
        </div>
        </center>
    <?php
     
     if(isset($_POST['save'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $national = $_POST['national'];
        $specialty = $_POST['specialty'];
        $birth_date = $_POST['birth_date'];
        $insert ="insert into add_doctor(name , phone , national , specialty , birth_date)
        values('$name','$phone','$national','$specialty','$birth_date')";
        $run=mysqli_query($con,$insert);
     }
    ?>
</body>
</html>

