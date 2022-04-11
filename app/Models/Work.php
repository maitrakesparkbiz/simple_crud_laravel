<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable=[
        'basic_id',
        'company',
        'designation',
        'to_date',
        'from_date'
    ];

    public function basic(){
        return $this->belongsTo(Basic::class);
    }
}
