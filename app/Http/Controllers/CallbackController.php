<?php

namespace App\Http\Controllers;

use App\Service\EmailServiceInterface;
use Illuminate\Http\Request;

class CallbackController
{

    /**
     * @var EmailServiceInterface
     */
    private $emailService;

    public function __construct(EmailServiceInterface $emailService)
    {
        $this->emailService = $emailService;
    }

    public function handleCallback(Request $request)
    {
        return $this->emailService->sendFromRequest($request);
    }
}