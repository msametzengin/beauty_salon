<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Doctor extends User
{
    use HasFactory, HasParent, HasRoles;

    protected static function booted()
    {
        static::created(function ($doctor) {
            if (!$doctor->hasRole('doctor')) {
                $doctor->assignRole('doctor');
            }
        });
    }

    protected $guard_name = 'web';

    public function appointments(): HasMany
    {
            return $this->hasMany(Appointment::class);
    }
}
