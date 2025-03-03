<?php

namespace App\Models;

class Cats
{
    public static function all(): array
    {
        return [
            ['name' => 'Fluffy', 'color' => 'black'],
            ['name' => 'Whiskers', 'color' => 'white'],
            ['name' => 'Socks', 'color' => 'orange']
        ];
    }
}