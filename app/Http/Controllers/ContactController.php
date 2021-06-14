<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function index(){
        $contacts= contact::all();
        return view('contact.index')->with(['contacts' => $contacts]);
    
    }

    public function create(Request $request){

        
        return view ("contact.create");
        $countcontact = $request->get('count');

    
    }


    public function upload(Request $request){

                $request->validate([
             'contactname' => 'required',
             'phonenumber' => 'required'
            ]);

        $contact = contact::create($request->all(), [
            'contactname' => 'required|unique:posts|max:255',
            'phonenumber' => 'required'
    
        ]);
        return redirect()->back()->with('success', "Contact Saved!");

    
    }
    
    public function edit($id){
        $contact = contact::find($id);
        return view('contact.edit')->with(['id' => $id, 'contact' => $contact]);
    
    }

    public function update(Request $request){
            $updatecontact = contact::find($request->id);
            $updatecontact -> contactname=$request->contactname;
            $updatecontact -> phonenumber=$request->phonenumber;
            $updatecontact-> save();
            return redirect('index')->with('success', "Contact updated successfully");

    }

    public function delete($id){
        $contact = contact::find($id);
        $contact ->delete();
        return redirect('index')->with('success', "Contact deleted successfully");
        }


    
    
    
    
}
