<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    protected $fillable = ['pjm_nama','pjm_alamat','pjm_tlp','pjm_foto'];
    public $timestamp = true;
}
