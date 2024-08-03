
<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style/serch_patient.css">
<title>Search of Patient</title>   
</head>
<body>
<div class="button">
    <a href="patient_file.php">Medical file</a>
        <a href="serch_patient.php">Search for a patient</a>
        <a href="print_prescription.php">Print his prescription</a>
</div>
   <center>
<form action="serch_patient.php" method="post">
    <input type="search" name="full_name" placeholder="Search for a patient"><input type="submit" value="View" name="view">
</form>
</center>
<div class="container">

<?php
 if(  isset($_POST['view'] ) ){
    $e = $_POST['full_name'];
    $get = "select * from patient_file where full_name ='$e'";
    $run = mysqli_query($con, $get);
    echo "<table> 
    <thead> <tr>
    <th>Full Name</th>
    <th>Date_birth</th>
    <th>Sex</th>
    <th>History_Medical </th>
    <th>History_Diseases</th>
    <th>Current_Diagnosis</th>
    <th>Inspection_Reports</th>
    <th>History_Medications</th>
    </tehed> </tr>";

  while( $user = mysqli_fetch_array($run)){
   echo "<tbody> <tr>";
   echo '<td>'.$user ['full_name'] . '</td>';
   echo'<td>'.$user ['date_birth'] . '</td>' ;
   echo'<td>'.$user ['sex'] .'</td>';
   echo'<td>'.$user ['history_medical_records'] . '</td>'; 
   echo'<td>'.$user ['date_date'] . '</td>';
   echo'<td>'.$user ['current_diagnosis'] . '</td>';
   echo'<td>'.$user ['medical_rebort'] . '</td>';
   echo'<td>'.$user ['historyt'].'</td>';
   echo "</tr> </tbody>";
}

echo "</table>";
 }

?>
</div>

</body>
</html>
