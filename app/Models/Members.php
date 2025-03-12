<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = "members";

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'pricingplan_id',
        'start_date',
        'end_date',
        'status',
    ];

    protected $dates = ['start_date', 'end_date'];
}
