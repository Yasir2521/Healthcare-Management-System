<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blooddelivery extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'email', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
