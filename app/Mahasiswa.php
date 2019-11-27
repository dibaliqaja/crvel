<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table    = 'mahasiswa';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat']; 
}
