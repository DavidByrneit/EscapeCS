<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $attributes = [
        'started' => false,
    ];
}
