<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $table = 'hobi';

    protected $fillable = [
    	'nama_hobi'
    ];

    public function siswa() {
    	return $this->belongsToMany('App\Model\Siswa', 'hobi_siswa', 'id_hobi', 'id_siswa');
    }

}
