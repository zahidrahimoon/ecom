<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'bookings';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'hospital_name',
        'hospital_address',
        'customer_mobile_number',
        'pickup_address',
        'type',
    ];

    // Define any relationships or additional methods here if needed
}
