<!DOCTYPE html>
<html>
<head>
<title>Contacts| Edit</title>
</head>
<body style="text-align:center">
<link rel="stylesheet" href="/app.css">
<br>
<br>
<br>
<br>
<br>
<br>

    <h1>Edit Contacts</h1><br>

    <h3 class="edit"><x-alert/></h3>

    
        <form action="/update" method="post">
    @csrf
    @method('patch')
    
    <input style="display:none" type="number" name="id" value="{{$contact['id']}}"/> 
    <input style="display:none" type="text" name="contactname" value="{{$contact['contactname']}}"/> 
   Name: <input type="text" name="contactname" value="{{$contact->contact}}"/><br><br>
   Phone: <input type="number" name="phonenumber" value="{{$contact->contact}}" /><br><br>
    
    
    
    <input type= "submit", value="Edit"/>
    </form><br>
    <a href="/index">Back</a>


</body>

</html>