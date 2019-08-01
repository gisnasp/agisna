<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $fillable = [ 'kategoris_id','penerbits_id','buku_judul','buku_jumlah','buku_deskripsi',
    'buku_pengarang','buku_terbit'];
    public $timestamp = true;
}
