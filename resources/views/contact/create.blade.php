<!DOCTYPE html>
<html>
<head>
<title>Phone|Create</title>



</head>
<body style="text-align:center">

    <h1>Create Contact</h1>
     <h3><x-alert/></h3>
    <form action="/upload" method="post">
    @csrf
    Name:<input type="text" name="contactname"/><br><br>
    Phone:<input type="number" name="phonenumber"/><br><br> 
    <input type= "submit", value="Create"/>
    </form>
    <br>
    <a href="/index">Back</a> 
</body>
</html>