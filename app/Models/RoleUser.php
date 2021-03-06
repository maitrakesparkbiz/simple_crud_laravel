<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey =null;
    public $incrementing =false;
    protected $fillable=['user_id','role_id'];
}
