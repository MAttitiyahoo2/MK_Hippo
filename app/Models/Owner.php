<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number'
    ];

    public function Patients()
    {
        return $this->hasMany(Patient::class);
    }

    public $timestamps = false;
}
