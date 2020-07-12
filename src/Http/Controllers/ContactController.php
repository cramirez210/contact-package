<?php

namespace Cramirez\Contact\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Cramirez\Contact\Models\Contact;
use Cramirez\Contact\Mail\ContactMailable;


class ContactController extends Controller
{
    public function index(){
        return view('contactpackage::contact');
    }

    public function send(Request $request){
        Mail::to('c.and.95@outlook.es')->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
