<?php

use App\Libraries\EmailService;


// Contact Us Email
function can_send_email_to_member($data)
{
    $emailService = new EmailService();
    return $emailService->sendContactUsEmail($data);
}