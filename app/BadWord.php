<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BadWord extends Model
{
    use HasFactory;

    protected $fillable = ['word', 'how_bad_is_it'];
}
