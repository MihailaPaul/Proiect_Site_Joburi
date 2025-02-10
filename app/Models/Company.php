<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{  
   
    use HasFactory;

    public function rJob()
    {
        return $this->hasMany(Job::class);
    }
    public function rCompanieDomain()
    {
        return $this->belongsTo(CompanieDomain::class,'companie_domain_id');
    }
    public function rCompanieLocation()
    {
        return $this->belongsTo(CompanieLocation::class,'companie_location_id');
    }
    public function rCompanieSize()
    {
        return $this->belongsTo(CompanieSize::class,'companie_size_id');
    }
}
