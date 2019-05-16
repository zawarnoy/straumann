<?php

namespace App\Http\Service\Traits;

trait IsAdminRoutesTrait
{
    protected function isAdminRouteRequest()
    {
        return strpos(request()->route()->getPrefix(), 'admin') !== false;
    }
}