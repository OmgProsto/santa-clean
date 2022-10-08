<?php

namespace App\Layer\Persistence\Repository\Santa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santa extends Model
{
    use HasFactory;

    protected $table = 'santas';

    public $timestamps = false;

    protected $guarded = [];
}
