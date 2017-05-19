<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mensaje extends Model
{
    use Notifiable;

    protected $fillable = [
        'nick', 'mensaje', 'fecha',
    ];

}
