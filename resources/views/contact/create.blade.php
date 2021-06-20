<!DOCTYPE html>
<html>
<head>
<title>Phone|Create</title>
<link rel="stylesheet" href="/app.css">




</head>
<body style="text-align:center">
<br>
<br>
<br>
<br>
<br>
<br>
    <h1>Create Contact</h1>
     <h3 class="success"><x-alert/></h3>
    <form action="/upload" method="POST">
    @csrf
   <div class="b"> Name:<input type="text" name="contactname"/><br><br>
    Phone:<input type="number" name="phonenumber"/><br><br> 
    <input type= "submit", value="Create"/>
    </form>
    
   <button class="ibutton"><a href= "/index">Back</a></button>
    
   
</body>
</html>