<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourCustomization extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'tour_customizations';
    protected $fillable =[
        'fname',
        'email',
        'number',
        'country',
        'arrival_date',
        'duration',
        'adults',
        'children',
        'destination',
        'tour_budget',
        'other_requirement'
        
    ];
}
