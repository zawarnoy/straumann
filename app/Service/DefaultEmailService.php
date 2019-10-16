<?php

namespace App\Service;

use DrewM\MailChimp\MailChimp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DefaultEmailService implements EmailServiceInterface
{

    public function sendFromRequest(Request $request): Response
    {
        $mailSubject = 'Заявка с сайта straumann.by';

        $emailForReceive = setting('admin.email');
        $mailheaders = "MIME-Version: 1.0;\r\n";
        $mailheaders .= "Content-type: text/html\r\n";
        $mailheaders .= "From: <orderbot@straumann.by>\r\n";
        $mailheaders .= "To: $emailForReceive\r\n";

        $name = $request->get('name');
        $org = $request->get('org');
        $phone = $request->get('phone');
        $subject = $request->get('subject');

        $message = 'Имя: '.$name.'<br>';

        if ($subject) {
            $message .= 'Тема: '.$subject.'<br>';
        }

        if ($phone) {
            $message .= 'Телефон: '.$phone.'<br>';
        }

        if ($org) {
            $message .= 'Организация: '.$org.'<br>';
        }

        mail($emailForReceive, $mailSubject, $message, $mailheaders);

//        $mailchimp = new MailChimp(env('MAILCHIMP_API_KEY', '070ae571d458e4019d1dbd5f38f9d3cd-us20'));
//
//        $data = [
//            'email_address' => $request->get('email', ''),
//            'status'       => 'subscribed',
//            'merge_fields' => [
//                'NAME'    => $request->get('name', ''),
//                'ORG'     => $request->get('org', ''),
//                'PHONE'   => $request->get('phone', ''),
//                'SUBJECT' => $request->get('subject', ''),
//            ],
//        ];
//
//        $listId = env('AUDIENCE_KEY', '9bedb6fb62');
//        $clientHash = MailChimp::subscriberHash($request->get('email', ''));
//        $mailchimp->put("lists/$listId/members/$clientHash", $data);
//        echo '<pre>';
//        print_r($mailchimp->getLastResponse()); die;

        return new Response('ok');
    }
}