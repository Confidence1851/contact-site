<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
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

        $request->validate([
             'contactname' => 'required',
             'phonenumber' => 'required'
            ]);

        $contact = Contact::create($request->all(), [
            'contactname' => 'required|unique:posts|max:255',
            'phonenumber' => 'required'

            ]);

                
        
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
