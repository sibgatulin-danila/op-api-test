<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RandomNumber extends Model
{
    protected $table = 'random_numbers';
    protected $fillable = [
        'number',
    ];
}
