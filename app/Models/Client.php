<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'ci', 'email', 'phone', 'address', 'city', 'country', 'birth_date', 'gender',
    ];
//un cliente puede tner varias citas
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
