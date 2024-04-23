<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appoin extends Model
{
    use HasFactory;
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    
    
}
