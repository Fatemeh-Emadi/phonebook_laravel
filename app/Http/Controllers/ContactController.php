<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    function index(){
        $contacts=Contact::all();
        return view("welcome",[
            "contacts"=>$contacts
        ]);
    }
    function add(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'family'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'phone'=>'required'
        ]);
        $contact=new Contact();
        $contact->name=$request["name"];
        $contact->family=$request["family"];
        $contact->email=$request["email"];
        $contact->mobile=$request["mobile"];
        $contact->phone=$request["phone"];
        $contact->save();
        return redirect()->to("/");

    }
}
