<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Patient extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'surname',
        'tc_id',
        'email',
        'phone',
        'birth_date',
    ];

   
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
