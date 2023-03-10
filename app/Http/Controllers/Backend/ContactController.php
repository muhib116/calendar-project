<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ReplayMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    function index(){
        $contacts = Contact::all();
        return Inertia::render('Backend/AdminDashboard/Contact/Index', compact('contacts'));
    }

    public function storeContact(Request $request) {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            // 'seen' => 'required',
            // 'settings' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'subject' => strip_tags($request->subject),
            'email' => $request->email,
            'message' => strip_tags($request->message),
            // 'settings' => $request->settings,
        ]);
        return redirect()->back()->with('message', 'Thank you for contact with us. We will get you soon.');
    }

    public function seen($id) {
        $contact = Contact::find($id);
        if ($contact) $contact->update(['seen' => 1]);
    }

    public function replay(Request $request ,Contact $contact) {
        $request->validate([
            'replay' => 'required',
        ]);

        Mail::to($contact)->send(new ReplayMail($contact, $request->replay));

        return redirect()->back()->with('Replay sent successfully');
    }
}
