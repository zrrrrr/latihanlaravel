<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
    		'nisn', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'id_kelas'
    ];

    protected $dates = ['tanggal_lahir'];
    
    public function telepon() {
        return $this->hasOne('App\Model\Telepon', 'id_siswa');
    }

    public function kelas() {
    	return $this->belongsTo('App\Model\Kelas', 'id_kelas');
    }
}
