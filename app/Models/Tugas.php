<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';
    protected $guarded = ['id'];

    public function kelas() {
        return $this->belongsTo(Kelas::class);
    }

    public function user() {
        return $this->belongsToMany(User::class,'tugasuser');
    }
}
