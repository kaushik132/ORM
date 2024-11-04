<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectProduct extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'reject_products';
    protected $fillable =[
        'prname',
        'photo',
        'prprice',
        'prdiscount',
        'prdescription',
        'manager_id'
        
    ];
}
