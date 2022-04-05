<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'name','marks','subject','class','created_at','updated_at',
    ];
}
