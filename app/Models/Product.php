<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable =[
        'pname',
        'photo',
        'pprice',
        'pdiscount',
        'pdescription',
        'manager_id'
        
    ];
}
