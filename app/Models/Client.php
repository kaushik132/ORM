<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'clients';
    protected $fillable =[
        'name',
        'age',
        'country',
        'email',
        'number',
        'address',
        'client_id',
        'manager_role',
        'staff_role'
        
        
    ];
}
