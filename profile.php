<html>
<head>

</head>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px #ccc;
    box-sizing: border-box;
}
table{
	background-color: white;
}
td{
	text-align: center;
}

</style>
<link rel="stylesheet" href="style4.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
	<div align="center">
    <h2>Profile</h2>
	<img src="download (2).jpg" alt="Profile image" style="width:200px;height:200px;align:center">
	<p>&nbsp;</p>
	<form action="" method="POST"  enctype="multipart/form-data">
		<input type="file" name="photo" value="browse" id="photo"/>
		<input type="submit" name="send" value="Upload" id="post" />
	</form>
	<table>
		<tr>
			<td>Employee name</td>
			<td></td>
		</tr>
		<tr>
			<td>Position</td>
			<td></td>
		</tr>
		<tr>
			<td>Attendance</td>
			<td>90%</td>
		</tr>
		<tr>
			<td>Score</td>
			<td>78 points</td>
		</tr> 
		<tr>
			<td style="text-align: center;">Progress</td>
			
				<?php
				$user='root';
				$pass='';
				$dbname='mydb';
				$conn= new mysqli('localhost',$user,$pass,$dbname) or die("unable to connect");
				$sql = "SELECT p_status FROM project";
				$result = $conn->query($sql);
  				if ($result->num_rows > 0)
  					{
  	 					while($row = $result->fetch_assoc())
  	 					 {
        					echo  "<td>" . $row["p_status"]. "</td>";
        				}
    				}
    			?>

			
		</tr>
		</table>
		<p>&nbsp;</p>
		</div>
	</body>
</html>

