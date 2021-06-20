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

       
        <h3> <x-alert/></h3>
      <div class:"q"> Number of saved contact(s) {{$contacts->count()}}</div>
    

    

    @foreach($contacts as $contact)
    <div class:"a"><li>
            {{$contact->contactname}}
            {{$contact->phonenumber}}
         <button class="button">   <a href= "{{asset('/' . $contact->id . '/edit')}}">Edit</a></button>
         <button class="button">   <a href= "{{asset('/' . $contact->id . '/delete')}}">Delete</a></button>
        
        </li></div>
    @endforeach



</body>

</html>