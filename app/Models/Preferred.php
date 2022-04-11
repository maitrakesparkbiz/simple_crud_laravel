<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferred extends Model
{
    use HasFactory;
    protected $fillable=[
        'basic_id',
        'option_id',
        'notice_period',
        'current_ctc',
        'exp_ctc',
        'department'
    ];
    public function basic(){
        return $this->belongsTo(Basic::class);
    }
}
