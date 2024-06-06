
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          h1{
            margin-left:600px;
            margin-top:70px;
        
          }
          .container{
            height:400px;
            width:500px;
            background-color:gray;
            position:absolute;
            margin-left:500px;
            border-radius:10px ;
            border:1px solid black;
            box-shadow: 10px 10px 10px black;
           
          }
          .Sub-btn input{
           margin-top:500px;
           margin-left:700px;
           font-size:20px;
           padding:4px;
           border-radius:4px;
           box-shadow: 10px 10px 10px black;
           background-color:aqua;
          }
          
          .child-container{
           padding:15px;
          }

          .child-container div {
            display:flex;
            justify-content:space-evenly;
            height:45px;
            margin-top:20px;
            
            
          }
          .child-container div input{
            width:50%;
            border-radius:10px;   
          }    
    </style>
</head>
<body>
    <form action="" method="Post">
      <h1> Insert Into Database</h1>
      <div class="container">
             <div class="child-container">
                 <div>
                   <h5>ROLL_NO</h5>
                   <input type="text" name="rollno" >
                 </div>
                 <div>
                 <h5>CANDIDATE_NAME</h5>
                   <input type="text" name="name" >

                 </div>
                 <div>
                 <h5>EMAIL_ID</h5>
                   <input type="text" name="email" >

                 </div>
                 <div>
                 <h5> COMPANY_NAME</h5>
                   <input type=" text" name="company" >

                 </div>
                 <div>
                 <h5> PACKAGE</h5>
                   <input type=" text" name="package" >

                 </div>
             </div>
      </div>
      <div class="Sub-btn">  
           <input type="Submit" name="Submit">
      </div>
    </div>
</form>

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
if(isset($_POST['Submit']))


    
  $RollNo=$_POST['rollno'];
  $Name=$_POST['name'];
  $email=$_POST['email'];
  $company=$_POST['company'];
  $package=$_POST['package'];

  $sql="INSERT INTO records_students(ROLL_NO,CANDIDATE_NAME,EMAIL_ID,COMPANY_NAME,PACKAGE) VALUES('$RollNo','$Name','$email','$company','$package');";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted!";
} else {
  echo "Error";
}





$conn->close();
?>
    
</body>
</html>

