<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table{
            border:2;
            width:40%;
            display:flex;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>
<body>
   <table border="2" >
        <tr>
               <th> ROLL_NO</th>
               <th> CANDIDATE_NAME</th>
               <th> EMAIL_ID</th>
               <th> COMPANY_NAME</th>
               <th> PACKAGE</th>
        </tr>
   </table>
    
</body>
</html>
<?php
// Assuming your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


global $conn;
// Query to get all data from your_table_name
$sql = "SELECT * FROM records_students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ROLL_NO: " . $row["ROLL_NO"]. " CANDIDATE_NAME: " . $row["CANDIDATE_NAME"]. "  EMAIL_ID: " . $row["EMAIL_ID"]. " COMPANY_NAME: " . $row["COMPANY_NAME"]." PACKAGE: " . $row["PACKAGE"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
