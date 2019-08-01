<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['ktg_nama'];
    public $timestamp = true;
}
