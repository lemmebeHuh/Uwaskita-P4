<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nim', 'email', 'user_id','photo'];

    public function nilais()
    {
        return $this->hasMany(Nilai::class);
    }
}

