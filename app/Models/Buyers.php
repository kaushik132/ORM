<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyers extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'buyers';
    protected $fillable =[
        'cname',
        'order_id',
        'pname',
        'price',
        'dicount',
        'quantity',
        'payment',
        'manager_role',
        'staff_role',
        'total_price'

        
    ];
    public function userstaff(){
        return $this->belongsTo(User::class,'staff_role');
    }
}
