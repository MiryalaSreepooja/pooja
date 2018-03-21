<!DOCTYPE html>

<html>
<head>
	<title>view remainders.</title>
<style>
body
{
background-color: #91ced4;
 }
table{
      width: 60%;
      height: 80%;
border-collapse: collapse;
    }
th{
    padding: 5px;
     border: 2px solid black;
     background-color: white;
     }
     td{
      padding: 5px;
     border: 2px solid black;
     	background-color: 	rgb(168,168,168)  ;
}
</style>
</head>
<body>
<br>
<h1 align="center"> Your reminders are here.</h1>
<br>
<?php
$user='root';
$pass='';
$dbname='mydb';
$conn= new mysqli('localhost',$user,$pass,$dbname) or die("unable to connect");
$sql = "SELECT msg,date FROM remainders";
$result = $conn->query($sql);

   ?> 
    <table align="center">
     <tr>
     <th>info</th>
     <th>date</th>
     </tr>";
    <?php  
     if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["msg"] ."</td> ";
        echo "<td>" . $row["date"] ."</td> ";
        echo "</tr>";
} 
}
else
{
    echo "no results";
}
    echo "</table>"; 
     $conn->close();
    ?>
</body>

</html>