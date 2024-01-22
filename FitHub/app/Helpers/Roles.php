<?php

namespace App\Helpers;

class Roles
{

    const ADMIN = 'admin';
    const COACH = 'coach';
    const USER = 'user';

    public static function getRoles(): array
    {
        return [
            self::ADMIN,
            self::COACH,
            self::USER,
        ];
    }

}
