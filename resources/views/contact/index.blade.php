<!DOCTYPE html>
<html>
<head>
<title>Contacts| Home</title>
</head>
<body>

    <h1>All Contacts</h1>

    

    <h3>
        <a href= "/create">Create</a>
        <h3> <x-alert/></h3>
    </h3>
    @foreach($contacts as $contact)
        <li>
            {{$contact->contactname}}
            {{$contact->phonenumber}}
            <a href= "{{asset('/' . $contact->id . '/edit')}}">Edit</a>
            <a href= "{{asset('/' . $contact->id . '/delete')}}">Delete</a>
        
        </li>
    @endforeach


</body>

</html>