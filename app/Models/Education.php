<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable=[
        'basic_id',
        'option_id',
        'university',
        'passing_year',
        'percentage'
    ];

    public function basic(){
        return $this->belongsTo(Basic::class);
    }
}
