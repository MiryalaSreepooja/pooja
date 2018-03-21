<!DOCTYPE html>
<html>
<head>
<title>Employee Page</title>
<style>
body
{
background-color: #91ced4;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Dropdown Button */
.dropbtn {
    background-color:#1282B9;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.sendbtn {
	width:5%;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}


/* The container <div> - needed to position the dropdown content ,, position: relative;*/
.dropdown {
    float:right;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
/* for chat box*/
h2{
    text-align: left;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<body onload="startTime()" style="background:CCE0DD">



<div style="float:right;color: black;padding: 5px;">
	<h2 id="txt" style="display:inline;padding:12px 12px;"></h2>
	<a href=""><img src="images (1).jpg" alt="Time" style="width:50px;height:50px;"></a>
</div>
<hr><h2 style="display:inline">Employee name</h2>
<div class="dropdown">
  <button class="dropbtn">View and settings</button>
  <div class="dropdown-content">
    <a href="profile.php">Profile</a>
	<a href="virem.php">View reminders</a>
    <a href=setrem.php>Set reminder</a>
    <a href="CE_Password.php">Change password</a>
    <a href=CompanyIntro.php>Log out</a>
  </div>
</div>
<pre>

</pre>
<hr>
<p> </p>
<h1></h1>

	<a href="emp.php" style="width:100%;background-color: #1282B9;color: white;padding: 16px;font-size: 20px;border: none;">Manager</a>
	<a href="prochat.php" style="width:100%;background-color: #1282B9;color: white;padding: 16px;font-size: 20px;border: none;">Project</a>

<h1></h1>
<div style="width:90%;height:400px;border: 2px solid black;padding: 5px;">
<?php
$user='root';
$pass='';
$dbname='mydb';
$conn= new mysqli('localhost',$user,$pass,$dbname) or die("unable to connect");
$sql = "SELECT frommsg,msg FROM projectchat";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         echo "<div>";
         echo "<h2>" . $row["frommsg"] .":". $row["msg"]. "</h2> ";
         echo "\n";
         echo "</div>";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<input type="text" id="message" name="msg" placeholder="Enter message" maxlength="16" style="padding:12px;width:90%"/>
    <button type="submit" name="submit" class="sendbtn" id="send">Send</button>	
    </form>
    <?php 
     if (isset($_POST['submit']))
      {
        
        $msg1=$_POST['msg'];
    
        $query="INSERT INTO projectchat(frommsg,msg) VALUES ('ME','".$msg1."')";

        if(mysqli_query($conn,$query))
         {
             echo "sent";
         }
         else
         {
                echo "unsend";
         }

       }
 ?>
</div>
</body>
</html>







