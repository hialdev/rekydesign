<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\Contact;
use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all()->keyBy('key');
        $meta = Meta::all()->keyBy('page');
        return view('contact',compact(['meta','contact']));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'no' => 'required|min:11|max:14',
            'message' => 'required',
        ]);
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no' => $request->no,
            'message' => $request->message,
        ];
        
        $mail = Contact::where('key','webmail')->first();
        $mail = $mail->contact;
        Mail::to($mail)->send(new Email($data));
        return redirect()->back()->with(['status' => 'Contact Form Submit Successfully']);
        
    }
}
