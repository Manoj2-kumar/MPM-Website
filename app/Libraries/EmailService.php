<?php

namespace App\Libraries;

class EmailService
{
    public function sendContactUsEmail($data)
    {
        $email = service('email');

        $email->setFrom('support@mumbaimaheshwari.com', 'MPM Mumbai Website');
        $email->setTo($data['sendTo']);

        $subject = 'New Enquiry from ' . $data['name'];

        $message = view('Pages/Emails/contact_us_email', [
            'full_name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'message' => $data['message'],
        ]);

        $email->setSubject($subject);
        $email->setMessage($message);
        $email->setMailType('html');

        if ($email->send()) {
            log_message('info', "Contact form email sent successfully to " . $data['sendTo']);
            return true;
        } else {
            log_message('error', "Email sending failed: " . $email->printDebugger(['headers']));
            return false;
        }
    }
}
