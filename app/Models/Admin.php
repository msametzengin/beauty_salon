<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class Admin extends User
{
    use HasFactory, HasParent, HasRoles;

        protected static function booted()
    {
        static::created(function ($admin) {
            if (!$admin->hasRole('admin')) {
                $admin->assignRole('admin');
            }
        });
    }


    protected $guard_name = 'web';

}
