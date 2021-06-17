<!DOCTYPE html>
<html>
<head>
<title>Contacts| Home</title>
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="/index.css">
</head>
<body style="text-align:center">
<br>
<br>
<br>
<br>
<br>
<br>

   <h1>All Contacts</h1>

    

    <h3>
    <br>

       <button class="button"> <a href= "/create">Create</a></button>
        <h3> <x-alert/></h3>
    </h3>
    @foreach($contacts as $contact)
    <div class="a">  <li>
            {{$contact->contactname}}
            {{$contact->phonenumber}}
         <button class="button">   <a href= "{{asset('/' . $contact->id . '/edit')}}">Edit</a></button>
         <button class="button">   <a href= "{{asset('/' . $contact->id . '/delete')}}">Delete</a></button>
        
        </li></div>
    @endforeach


</body>

</html>