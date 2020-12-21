<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'role_id',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'gender',
        'contact',
    ];

    protected $appends = ['full_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute()
    {
        $middle_name = isset($this->middle_name)?' '.$this->middle_name.' ':' ';
        return $this->first_name.$middle_name.$this->last_name.' '.$this->suffix;
    }
}
