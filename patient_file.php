
<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/patient_file.css">
    <title>Patient File</title>
</head>
<body>

<div class="button">
<a href="patient_file.php">Medical file</a>
        <a href="serch_patient.php">Search for a patient</a>
        <a href="print_prescription.php">Print his prescription</a>
</div>
    <div class="container">
        <h1>Patient's Medical File</h1>
        <form action="patient_file.php" method="post">
            <label for="">Full Name : </label><input type="text" name="full_name">
            <label for="">Date of birth : </label><input type="date" name="date_birth "><br><br>
             <input type="radio" name="sex" value="Mail">Mail <br><br>
             <input type="radio" name="sex" value="Female">Female <br><br>
            <label for="">History of medical records : </label>
            <textarea name="history_medical_records" id="" cols="30" rows="10"></textarea>
            <label for="">History of previous diseases and surgeries : </label>
            <input type="date" name="date_date">
            <label for="">Current diagnosis : </label>
            <textarea name="current_diagnosis" id="" cols="30" rows="10"></textarea>
            <label for="">Medical examination and analysis reports : </label>
            <textarea name="medical_rebort" id="" cols="30" rows="10"></textarea>
            <label for="">History of medications and treatments :</label>
            <textarea name="history" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Save" name="save">
        </form>  
    </div>
</body>
</html>

<?php

if(isset($_POST['save'])){
    $full_name=$_POST['full_name'];
    $date_birth=$_POST['date_birth'];
    $sex = $_POST['sex'];
    $history_medical_records=$_POST['history_medical_records'];
    $date_date = $_POST['date_date'];
    $current_diagnosis=$_POST['current_diagnosis'];
    $medical_rebort=$_POST['medical_rebort'];
    $history=$_POST['history'];
    $insert = "insert into patient_file (full_name , date_birth , sex , history_medical_records , date_date ,
    current_diagnosis , medical_rebort,history ) Values('$full_name' , '$date_birth' , '$sex',
   '$history_medical_records','$date_date','$current_diagnosis',' $medical_rebort','$history')";
   
   $run = mysqli_query($con,$insert);
}   
?>

