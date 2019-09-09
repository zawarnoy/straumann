<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallbackController
{
    public function handleCallback(Request $request)
    {
        if (!($email = setting('admin.email'))) {
            return;
        }

        // todo добавить сервис провайдер для писем и мейлер
    }
}