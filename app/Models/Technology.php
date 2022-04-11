<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    protected $fillable=[
        'basic_id',
        'option_id',
        'status',
    ];
    public function basic(){
        return $this->belongsTo(Basic::class);
    }
}
