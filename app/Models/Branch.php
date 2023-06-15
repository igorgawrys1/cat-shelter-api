<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
    ];

    public function cats()
    {
        return $this->hasMany(Cat::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}