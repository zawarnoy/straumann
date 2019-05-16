<?php

namespace App\Http\Service\Traits;

trait IsChoiceRoleRouteTrait
{
    protected function isChoiceRoleRoute() {
        return request()->route()->named('role.choice');
    }
}