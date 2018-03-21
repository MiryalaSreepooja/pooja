<html>
<head>
<style>
body
{
background-color: #91ced4;
}


.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.p
{
text-align:right;
font-size:18px;
}


.success {background-color: #1282B9;} 
.success:hover {background-color: #46a049;}
</style>
</head>
<body>
<form>
<p class="p">
<b>Date : </b><input type="date"  name="date" id="date" value="2017-07-07" required> <br> 
</p>


<h2>REMAINDER</h2> 


<h3>Send to
  <textarea name="message" rows="1" cols="100"> </textarea></h3>
  <br>
  

  <textarea name="message" rows="20" cols="150"> </textarea>
  <br>
  
<button class="btn success">Set remainder
</button>

</form>
</body>
</html>