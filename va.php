<html>
<head><link rel="stylesheet" type="text/css" href="style1.css">
<title>View attendence</title>
</head>
<body>
  
<h1 id="demo">Attendence of Employee</h1>
 <div style="text-align: right;">
<input type="search" id="mySearch" placeholder="Search by Employeename" style="height:30px;" >
<button onclick="myFunction()" style="height:30px; padding-right: 10px " >search</button>
<script>
function myFunction() {
    var x = document.getElementById("mySearch").value;
    document.getElementById("demo").innerHTML = x +"'s attendance";
}
</script>
</div>
<br>

<h3>Show 
  <select >      
     <option value=>10</option>
   <option value="9">9</option>
  <option value="8">8</option>
   <option value="7">7</option>
     </select>entries</h3>
  
  <hr>
 <table id="tb"  style="width:100%">
 	<tr>
 	<th>Date <select>
 		<option id="myOption"></option>
 	</select>
 	<th>In Time<select id="T1">
 <option id="myOption"></option> 
                                                    
     </select></th>
 	<th>Out Time<select id="schedule">
 <option id="myOption"></option> 

     </select> </th>
 	<th>Working hours<select id="schedule">
 <option id="myOption"></option> 

     </select></th>
     <th> Status<select id="T1">
 <option id="myOption"></option> 
                                                    
     </select></th>
 	</tr>
 <tr>

 <!--1st line-->
 	<td id="d">09-07-2017</td>
 	<script type="text/javascript">
 n=new Date();
 y=n.getFullYear();
 mo=n.getMonth()+1;
 d=n.getDate();
 	document.getElementById("d1").innerHTML= d+1+"/"+mo+"/"+y;
 	</script>
 <!-- 1st line 2nd column-->
 	<td id="t1"></td>
 	<script type="text/javascript">
var d=new Date();
var h=d.getHours();
var m=d.getMinutes();
document.getElementById("t1").innerHTML= h+":"+m;
 </script>
 <!-- 1st line 3rd column-->
 <td id="t1">00:07:16</td>
 <!-- 1st line 4th column-->
 <td> 00:20:40</td>
 <!-- 1st line 5th column-->
 <td> Present.</td>
 </tr>
 <tr>
 <!--2nd line-->
 	<td id="d1">18-07-2017</td>
 	<script type="text/javascript">
 n=new Date();
 y=n.getFullYear();
 mo=n.getMonth()+1;
 d=n.getDate();
 	document.getElementById("d1").innerHTML= d+1+"/"+mo+"/"+y;
 	</script>
 <!-- 2nd line 2nd column-->
 	<td id="r2">09:20</td>
 	<script type="text/javascript">
var d=new Date();
var h=d.getHours();
var m=d.getMinutes();
document.getElementById("t1").innerHTML= h+":"+m;
 </script>
 <!-- 2nd line 3rd column-->
 <td id="r2">08:20</td>
 <!-- 1st line 4th column-->
 <td id="r2"> 00:20:40</td>
 <!-- 1st line 4th column-->
 <td id="r2"> Present.</td>
 </tr>
 <tr>
 <td id="d">
 	08-07-2017
 </td>
 <td></td>
 <td>20:03:04</td>
 <td>  </td>
 <td>Holiday</td>
 </tr>
 <tr>
 	<td id="d1">11-08-2017</td>
 	<td id="r2"></td>
 	<td id="r2"></td>
 	<td id="r2"></td>
 	<td>Holiday.</td>
 </tr>
  <tr>
 	<td id="d">11-10-2017</td>
 	<td>12:45</td>
 	<td>00:78:45</td>
 	<td>09:06:08</td>
 	<td>Present.</td>
 </tr>
 <tr>
 	<td id="d1">1-10-2017</td>
 	<td id="r2">12:05</td>
 	<td id="r2">00:98:45</td>
 	<td id="r2">09:56:08</td>
 	<td id="r2">Present.</td>
 </tr>
 <tr>
 	<td id="d">11-10-2017</td>
 	<td></td>
 	<td></td>
 	<td></td>
 	<td>Holiday.</td>
 </tr>
 <tr>
 	<td id="d1">19-10-2017</td>
 	<td id="r2">00:05</td>
 	<td id="r2">00:98:45</td>
 	<td id="r2">09:56:08</td>
 	<td id="r2">Present.</td>
 </tr>
  <tr>
 	<td id="d">11-10-2017</td>
 	<td></td>
 	<td></td>
 	<td></td>
 	<td>Holiday.</td>
 </tr>
<tr>
 	<td id="d1">06-06-2017</td>
 	<td id="r2"></td>
 	<td id="r2"></td>
 	<td id="r2"></td>
 	<td id="r2">Holiday.</td>
    </tr>
<tr>
  <td id="d">11-10-2017</td>
  <td>12:45</td>
  <td>00:78:45</td>
  <td>09:06:08</td>
  <td>Present.</td>
 </tr>

 </table>
 <hr>
<p id="r"><b> showing 1 of 29 entries</b></p>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</body>
</html>