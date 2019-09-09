<?php

namespace App\Service;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DefaultEmailService implements EmailServiceInterface
{

    public function sendFromRequest(Request $request): Response
    {
        return new Response('kek');
    }
}