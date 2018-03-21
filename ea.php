<!DOCTYPE html>
<html>
<head>
	<title>Edit addendence</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h1 id="demo">Editing Attendence of Employee</h1>
 <div style="text-align: right;">
<input type="search" id="mySearch" name="fname" required placeholder="Search by Employeename" style="height:30px;" >
<button onclick="myFunction()" style="height:30px; padding-right: 10px " >search</button>
<script>
function myFunction() {
    var x = document.getElementById("mySearch").value;
    document.getElementById("demo").innerHTML = "Edit "+ x +"'s attendance";
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
  <table width="98%">
 <tr> 	
 <th>Username</th>
 <th>Leave date</th>
 <th>Leave category</th>
 <th>Leave reason</th>
 <th>Status</th>
  </tr>
  <tr>
  	<td id="r2"> Pabel</td>
  	<td>06-06-2017</td>
  	<td>personal</td>
  	<td>abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
  <tr>
  	<td id="r2"> Pabel</td>
  	<td id="d1">06-06-2017</td>
  	<td id="d1">personal</td>
  	<td id="d1">abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
  <tr>
  	<td id="r2"> Pabel</td>
  	<td>06-06-2017</td>
  	<td>personal</td>
  	<td>abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
  <tr>
  	<td id="r2"> Pabel</td>
  	<td id="d1">06-06-2017</td>
  	<td id="d1">personal</td>
  	<td id="d1">abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
  <tr>
  	<td id="r2"> Pabel</td>
  	<td>06-06-2017</td>
  	<td>personal</td>
  	<td>abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
   <tr>
  	<td id="r2"> Pabel</td>
  	<td id="d1">06-06-2017</td>
  	<td id="d1">personal</td>
  	<td id="d1">abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
  <tr>
  	<td id="r2"> Pabel</td>
  	<td>06-06-2017</td>
  	<td>personal</td>
  	<td>abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
   <tr>
  	<td id="r2"> Pabel</td>
  	<td id="d1">06-06-2017</td>
  	<td id="d1">personal</td>
  	<td id="d1">abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
   <tr>
  	<td id="r2"> Pabel</td>
  	<td>06-06-2017</td>
  	<td>personal</td>
  	<td>abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
  <tr>
  	<td id="r2"> Pabel</td>
  	<td id="d1">06-06-2017</td>
  	<td id="d1">personal</td>
  	<td id="d1">abcd</td>
  	<td>
  		<button id="acc"><b>accept</b></button>
  		<button id="rej"><b>reject</b></button>
  	</td>
  </tr>
  </table>
  <hr>
<h3>Showing 1 of 29 entries.</h3>
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