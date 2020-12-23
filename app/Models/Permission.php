<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Permission extends Model
{
    use NodeTrait, HasFactory;

    protected $table = 'permissions';

    protected $fillable = [
        'name', 
        'permission', 
        'description',
    ];
}
