<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table='kelas';

    protected $guarded=['id'];

    public function tugas() {
        return $this->hasMany(Tugas::class);
    }
    public function user() {
        return $this->belongsToMany(User::class,'classuser');
    }
}
