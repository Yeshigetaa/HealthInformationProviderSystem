<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'description',
        'cause',
        'symptom',
        'treatment',
        'transmition',
    ];
    public function HealthExperts()
    {
        return $this->belongsTo(HealthExpert::class);
    }

}
