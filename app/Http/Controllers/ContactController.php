<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contacts/list',compact('contacts'));
    }
    public function create(){
        return view('contacts/create');
    }
    public function store(Request $request){

        //validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location'=>'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->location = $request->location;
        $contact->save();
    
        return redirect('/contacts')->with('msg','Record added');

    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contacts')->with('msg','Record Deleted');

    }

    public function edit($id){
        $contact = Contact::find($id);
        return view('contacts/edit',compact('contact'));
    }


    public function update(Request $request,$id){
        //validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location'=>'required'
        ]);

        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->location = $request->location;
        $contact->save();
    
        return redirect('/contacts')->with('msg','Record updated');


    }



}
