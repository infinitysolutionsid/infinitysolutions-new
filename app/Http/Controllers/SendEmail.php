<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendEmail extends Controller
{
    public function sendemail(Request $request)
    {
        $subject = "Contact dari " . $request->subject;
        $name =  $request->name;
        $email = $request->email;
        $message = $request->message;

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'mail.infinitysolutions.co.id';
            $mail->SMTPAuth = true;
            $mail->username = 'support@infinitysolutions.co.id';
            $mail->password = 'InfinitY2501?!!';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress('support@infinitysolutions.co.id', 'Support Infinity Solutions');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = $message;
            $mail->send();

            $request->session()->flash('sukses');
        } catch (Exception $e) {
            echo 'Messages could not be sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
        }

        $maillist = new \App\MailDB();
        $maillist->nama_pengirim = $name;
        $maillist->email = $email;
        $maillist->subject = $request->subject;
        $maillist->messages = $message;
        $maillist->logIp = $request->getClientIp();
        $maillist->save();

        return back()->with('sukses');
    }
}
