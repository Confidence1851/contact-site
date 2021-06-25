<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ContactController extends Controller
{
    
    public function list(){
        $contacts= Contact::all();
        return view('contact.list')->with(['contacts' => $contacts]);
    }

    public function create(Request $request){

        return view ("contact.create");
    }


    public function upload(Request $request){

       $contact = $request->validate([
             'contactname' => 'required',
             'phonenumber' => 'required'
            ]);

        Contact::create($contact);
        return redirect('list')->with('success', "Contact Saved!");
   }
    
    public function edit($id){
        $contact = Contact::find($id);
        return view('contact.edit')->with(['id' => $id, 'contact' => $contact]);
    
    }

     public function update(Request $request){

            $updatecontact = Contact::find($request->contact_id);
            $updatecontact -> contactname=$request->contactname;
            $updatecontact -> phonenumber=$request->phonenumber;
             
            
        
            $updatecontact->save();
            return redirect('list')->with('success', "Contact updated successfully");

    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact ->delete();
        return redirect('list')->with('success', "Contact deleted successfully");
        }

    
               
    

    


    
    
    
    
    
}
