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

    <h1>Edit Contacts</h1>

    <h3 class="edit">
        <x-alert />
    </h3>
    


    <form action="/update" method="post">
        @csrf
        @method('patch')

    

        <input style="display:none" type="number" name="contact_id" value="{{$contact['id']}}">
        Name: <input type="text" name="contactname" value="{{$contact['contactname']}}" /><br><br>
        Phone: <input type="number" name="phonenumber" value="{{$contact['phonenumber']}}" /><br><br>



        <input type="submit" , value="Edit" />
    </form><br>
    <a href="/index">Back</a>


</body>

</html>