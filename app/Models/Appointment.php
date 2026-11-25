<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // This allows Laravel to save these fields
    protected $fillable = [
        'user_id',
        'client_name',
        'appointment_date',
        'appointment_time',
        'status',
    ];
}