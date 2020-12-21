<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'name', 'description',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->using(PermissionRole::class)->withPivot('access_level');
    }
}
