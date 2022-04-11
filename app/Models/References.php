<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    use HasFactory;
    protected $fillable=[
        'basic_id',
        'name',
        'contact_no',
        'relation'
    ];
    public function basic(){
        return $this->belongsTo(Basic::class);
    }
}
