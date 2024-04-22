<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_appointment extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'doctor_name',
    //     'phone',
    //     'sex',
    //     'specialty',
    // ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
