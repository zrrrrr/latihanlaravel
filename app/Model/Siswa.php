<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
    		'nisn', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin'
    ];

    protected $dates = ['tanggal_lahir'];
    
    // public function getNamaAtrribute($nama) {
    // 	return ucwords($nama);
    // }

    // public function setNamaAtrribute($value) {
    // 	this->attributes['nama'] = strtolower($value);
    // }
}
