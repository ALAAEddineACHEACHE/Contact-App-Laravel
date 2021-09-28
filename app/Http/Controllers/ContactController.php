<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * return view contact
     *
     * @return void
     */
    public function showContact()
    {
        return view("contact");

        // $title = "ALae";
        // $names = ['calros', 'badr', 'alae'];
        // return view("contact", compact('title', 'names'));
    }
    public function home()
    {
        return view('welcome');
    }
    public function sendContact(Request $request)
    {
        // dd($request->all('nom', 'email'));
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);
        Mail::to(config('mail.from.address'))->send(new ContactMessage(
            $request->name,
            $request->email,
            $request->content
        ));
        return back()->with("success", 'Votre message est bien envoyé');
    }
}
