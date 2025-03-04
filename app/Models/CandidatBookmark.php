<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatBookmark extends Model
{
    use HasFactory;

    public function rCandidat()
    {
        return $this->belongsTo(Candidate::class,'candidate_id');
    }

    public function rJob()
    {
        return $this->belongsTo(Job::class,'job_id');
    }
}
