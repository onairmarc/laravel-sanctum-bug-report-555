<?php

namespace App\Models;

use Laravel\Sanctum\PersonalAccessToken;

class CustomPersonalAccessToken extends PersonalAccessToken
{
    protected $table = "sys_personal_access_tokens";
}
