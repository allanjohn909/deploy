<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //
    protected $table = 'servers';
    protected $fillable = [
        'sname', 'ip', 'pork', 'password',
    ];

    protected $hidden = [
        'remember_token'
    ];
}
