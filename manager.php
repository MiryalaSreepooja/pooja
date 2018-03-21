<!DOCTYPE html>
<html>
<head>
<title>Manager Page</title>
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
    background-color: #1282B9;
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
<hr><h2 style="display:inline">Manager name</h2>
<div class="dropdown">
  <button class="dropbtn">View and settings</button>
  <div class="dropdown-content">
        <a href="va.php">View Attendance</a>
	<a href="#">View Reminders</a>
    <a href="setrem.php">Set Reminder</a>
 <a href="add_holiday.php">Set Holidays</a>
    <a href="CM_Password.php">Change Password</a>
    <a href="CompanyIntro.php">Log out</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Edit</button>
  <div class="dropdown-content">
	<a href="ea.php">Attendance</a>
    <a href="#">Score</a>
  </div>
</div>
<pre>

</pre>
<hr>
<p> </p>
<h1></h1>
  <button class="dropbtn">Create Group</button>
  <div class="dropdown-content">
	<a href="#">Add Member</a>
    <a href="#">Remove Member</a>
  </div>
</div>
	
	

<h1></h1>
<div style="width:90%;height:400px;border: 2px solid black;padding: 5px;">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="">
	<input type="text" id="message" placeholder="Enter message" maxlength="16" style="padding:12px;width:90%"/>
    <button type="submit" class="sendbtn" id="send">Send</button>	
</div>
</body>
</html>







