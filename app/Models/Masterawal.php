<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterawal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Master()
    {
        return $this->hasMany(Master::class);
    }
}