<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dosen extends Model
{
    use HasFactory;


    public $fillable = ['nama', 'alamat', 'nik'];
    protected $table = 'dosen';

    public function id()
    {
        return $this->belongsTo('App\Id');
    }

    public function mahasiswa(){ //relation one to many
        return $this->hasMany(Mahasiswa::class, 'dosen_id');  //mata kuliah pnya bnyk jdwl
    }
}


