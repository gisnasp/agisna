<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $fillable = ['petugas_id','peminjams_id','kartu_pembuatan','kartu_akhir','kartu_aktif'];
    public $timestamp = true;
}
