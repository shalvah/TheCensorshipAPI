<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BadWord extends Model
{
    protected $fillable = ['word', 'how_bad_is_it'];
}
