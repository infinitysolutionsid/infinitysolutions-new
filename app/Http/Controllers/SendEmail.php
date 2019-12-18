<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendEmail extends Controller
{
    public function sendemail(Request $request)
    {
        $subject = "Contact dari infinitysolutions.co.id: " . $request->subject;
        $name =  $request->name;
        $email = $request->email;
        $message = $request->message;

        $maillist = new \App\MailDB();
        $maillist->nama_pengirim = $name;
        $maillist->email = $email;
        $maillist->subject = $subject;
        $maillist->messages = $message;
        $maillist->logIp = $request->getClientIp();
        $maillist->save();

        return back()->with('sukses', 'Your messages has been successfully sent! We will reply your email within 2x24 hours.');
    }
}
