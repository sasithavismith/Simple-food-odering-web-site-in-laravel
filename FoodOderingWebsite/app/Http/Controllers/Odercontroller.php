<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Contact;
class Odercontroller extends Controller
{
    public function save(Request $request){
        $message=new Contact;
        $this ->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
            
        ]);
        $message->name=$request->input('name');
        $message->email=$request->input('email');
        $message->subject=$request->input('subject');
        $message->message=$request->input('message');
        
        $message-> save();
//dd($request->all());
      
      // return redirect()->back();
    
   // $allcars=Allcar::all();
   // dd($allcars);

   return redirect('/home');
    }
}
