<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table  = 'mahasiswa';
    protected $fillabel = ['user_id', 'tgl_lahir', 'tempat_lahir', 'telepon', 'alamat', 'gender', 'foto'];

    public function User()
    {
        return $this->belongsTo(user::class, 'user_id','id');
    }
}