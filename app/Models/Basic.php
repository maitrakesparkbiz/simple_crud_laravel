<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'fname',
        'lname',
        'designation',
        'email',
        'addr1',
        'addr2',
        'phone',
        'zip',
        'gender',
        'country_id',
        'state_id',
        'city_id',
        'material_status',
        'dob'
    ];

    public function education(){
        return $this->hasMany(Education::class);
    }
    public function works(){
        return $this->hasMany(Work::class);
    }
    public function language(){
        return $this->hasMany(Language::class);
    }
    public function technology(){
        return $this->hasMany(Technology::class);
    }
    public function reference (){
        return $this->hasMany(References::class);
    }
    public function preferred (){
        return $this->hasMany(Preferred::class);
    }
    public function roles(){
        return $this->belongsToMany(Role::class,'pivots','basic_id','role_id');
    }

}
