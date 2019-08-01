<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $fillable = ['petugas_id','peminjams_id','pjm_tgl','pjm_tglkembali'];
    public $timestamp = true;
}
