<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey =null;
    public $incrementing =false;
    protected $fillable=['user_id','role_id'];
    

}
