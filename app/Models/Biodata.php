<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nik',
        'full_name',
        'birth_date',
        'gender',
        'blood',
        'religion',
        'status',
        'profession',
        'numbers',
        'email',
        'facebook',
        'instagram',
        'twitter'
    ];

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function education(): HasOne
    {
        return $this->hasOne(Education::class);
    }
}
