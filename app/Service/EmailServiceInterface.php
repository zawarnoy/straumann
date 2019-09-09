<?php

namespace App\Service;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

interface EmailServiceInterface
{
    public function sendFromRequest(Request $request): Response;
}