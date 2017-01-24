<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends \Eloquent
{
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $filleable = ['date', 'email'];
    protected $table = 'calendar';
}
