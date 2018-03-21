<!DOCTYPE html>
<html>
<head>
<style>
body
{
background-color: #91ced4;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
}

.b1
{
background-color: #1282B9;
font-size:16px;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
 .cancelbtn {
    width: auto;
    padding: 10px 14px;
    background-color: #f44336;
}

input[type=button]
{
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
    background-color: #f44336;
}
.container {
    padding: 16px;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}


span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

#wrapper
{
  width:995px;
  padding:0px;
  margin:0px auto;
  text-align:center;
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>


<button class = b1 onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Add Holiday </button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
       <div id="wrapper">
          <div id="field_div">
               <p> Select a date 
               <input type="date"  name="date" id="date" value="2017-07-07" required> <p> <br> 
               <button class = btn onclick="add_field();"> Add More </button>
          </div
       </div>
   </div>
    <div class="container" style="background-color:#f1f1f1">
      <button  type="submit" > Add </button>
      <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function add_field()
{
  var total_text=document.getElementsByClassName("input_text");
  total_text=total_text.length+1;
  document.getElementById("field_div").innerHTML=document.getElementById("field_div").innerHTML+
  "<p id='input_text"+total_text+"_wrapper'> Select a date <input type='date' class='input_text' id='input_text"+total_text+"' value='2017-07-07'> <input type='button' value='Remove' onclick=remove_field('input_text"+total_text+"');></p>";
}

function remove_field(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>

</body>
</html>
