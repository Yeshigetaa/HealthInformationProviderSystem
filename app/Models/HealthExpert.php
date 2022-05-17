<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthExpert extends Model
{
    use HasFactory;
    protected $fillable=[
        'fname',
        'lname',
        'sex',
        'email',
        'Profession'];
    public function  Diseases()
    {
        return $this->hasMany(Disease::class);
    }
  
}
