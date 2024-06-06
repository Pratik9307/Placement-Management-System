<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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

<table border="2">
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_info";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Connection failed: ",$conn;
}
global $conn;
global $num1;
global $count;
// All Count of Student
if(isset($_POST["totalcount"])) {
	// Return the fixed value of 85
	$num1=200;
	echo $num1;
} 	



//  all Placed Student Data
if(isset($_POST["PlacedStudent"])) {
	$sql ="SELECT COUNT(*) AS Placed_Student FROM records_students";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // Fetch the total count from the result
    $row = $result->fetch_assoc();
    $Placed_Student1= $row["Placed_Student"];
    // Display the total count
	$count=intval($Placed_Student1);
    echo  $count;
} else {
    echo "0 results";
}
}

if(isset($_POST["Waitlisted"])) {
	$result1=$num1-$count;
	echo $result1;

} 


if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["Armstrong"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Armstrong\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA <br>";
			}
		}
	}
	if(isset($_POST["Klassic"])){
		$sql="SELECT `Roll_No`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Klassic wheel\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID :".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA <br>";
			}
		}
	}
	if(isset($_POST["Jscontrol"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"JS_Control\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA <br>";
			}
		}
	}
	if(isset($_POST["Tefologhic"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Tefologic\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA <br>";
			}
		}
	}
	if(isset($_POST["toyota"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Toyota\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA <br>";
			}
		}
	}
	if(isset($_POST["Renata"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Renata\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA <br>";
			}
		}
	}
	if(isset($_POST["Byjus"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Byjus\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA  <br>";
			}
		}
	}
	if(isset($_POST["wallspace"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Wallspace\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA  <br>";
			}
		}
	}
	if(isset($_POST["Deloitte"])){
		$sql="SELECT `ROLL_NO`, `CANDIDATE_NAME`, `EMAIL_ID`, `COMPANY_NAME`, `PACKAGE` FROM `records_students` WHERE COMPANY_NAME=\"Deloitte\";";
		$data=$conn->query($sql);
		if($data->num_rows > 0){
			while($row=$data->fetch_assoc()){
				echo "ROLL_NO:".$row["ROLL_NO"],"CANDIDATE_NAME :".$row["CANDIDATE_NAME"],"EMAIL_ID:".$row["EMAIL_ID"],"COMPANY_NAME :".$row["COMPANY_NAME"],"PACKAGE :".$row["PACKAGE"],"LPA  <br>";
			}
		}
	}
	if(isset($_POST["Report"])){
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
	}
	
	// Process form submission only if the button named "Insert_Data" is clicked
if (isset($_POST['insert'])) {
    // Your PHP code to insert data into the database or perform any other action goes here

    // Redirect to another PHP page after processing the data
    header("Location: insert.php");
    exit(); // Ensure no further code is executed after redirection
}
if (isset($_POST['log-out'])) {
    // Your PHP code to insert data into the database or perform any other action goes here

    // Redirect to another PHP page after processing the data
    header("Location: index.php");
    exit(); // Ensure no further code is executed after redirection
}
	
	
	
}
$conn->close();
?>
