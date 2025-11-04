<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Enquiry;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
     public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $enquiry = Enquiry::create([
            'name'    => $data['name'],
            'email'   => $data['email'],
            'phone'   => $data['phone'] ?? null,
            'subject' => $data['subject'] ?? null,
            'message' => $data['message'],
        ]);

        
        Mail::send('emails.contact', [
            'name'        => $enquiry->name,
            'email'       => $enquiry->email,
            'phone'       => $enquiry->phone,
            'body' => $enquiry->message,
        ], function ($mail) use ($enquiry) {
            $mail->from($enquiry->email, $enquiry->name);
            $mail->to('info@careconnectsolution.org')
                ->subject('New Enquiry: ' . ($enquiry->subject ?? 'No Subject'));
        });

        return redirect()->to(url()->previous() . '#contact')->with('success', 'Your email has been sent successfully!');
    }
}
