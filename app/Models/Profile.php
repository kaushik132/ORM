<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'profiles';
    protected $fillable =[
        'fname',
        'lname',
        'image',
        'email',
        'number',
        'about',
        'country',
        'address'
        
    ];
}
