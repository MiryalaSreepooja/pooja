<!DOCTYPE html>
<html>
<head>
	<title>Update Status</title>
</head>
<style type="text/css">
h1{
	font-size: 65px;
	 text-shadow: 3px 3px 3px #cc3399;
}
	body{
		background-color: #ccffee;
		align-content: center;
		border: 6px solid black;
    margin-top: 40px;
    margin-bottom: 60px;
    margin-right: 150px;
    margin-left: 150px;
     padding-top: 15px;
     padding-bottom: 20px;
      border-radius: 25px;
      box-shadow: 10px 10px;
	}
	.st{
		text-align: center;
		font-size: 38px;
		text-shadow: 1px 1px 1px #ee82ee;
	}
	form
    {
    	text-align: center;
    	font-size: 40px;
    	font-family: bold;
    	text-shadow: 1px 1px 1px rgb(132, 58, 67);
    }
</style>
<body>
	<h1 align="center">Update the status of project.</h1>

               <div class="st">
				<?php
				$user='root';
				$pass='';
				$dbname='mydb';
				$conn= new mysqli('localhost',$user,$pass,$dbname) or die("unable to connect");
				$sql = "SELECT p_status,pjct_id FROM project";
				$result = $conn->query($sql);
  				if ($result->num_rows > 0)
  					{
  	 					while($row = $result->fetch_assoc())
  	 					{
        			echo  "<h3>Current status of project-" . $row["pjct_id"]. " : " . $row["p_status"]. "</h3>";
        					//echo  "\n\n<h3>Project id  " . $row["pjct_id"]. "</h3>\n";
        				}
    				}
    			?>
    		</div>
    		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    			Enter status of project:
    			<input type="number" name="statu">
    			 <button type="submit" name="submit"  id="send">submit</button> 
    		</form>
    		<br>
    		 <div class="st">
    		<?php
    		if (isset($_POST['submit']))
    		{
 			$stat=$_POST['statu'];
 			$query= "UPDATE project SET p_status=".$stat." WHERE pjct_id=1234";
 			 if(mysqli_query($conn,$query))
        	 {
             echo  "Status updated.";
        	 }
         	else
         	{
                echo "NO updation";
         	}
            }
    		  ?>
    		</div>
    		
    		 <div class="st">
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
        				echo  "\n\n<h3>Current updated status of project:  " . $row["p_status"]. "</h3>\n";
        				}
    				}
    			?>
    		</div>
</body>
</html>