<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $table = "artikel";
    protected $fillable = array('id', 'tanggal', 'judul', 'berita', 'gambar', 'dibaca');
    public $timestamps = false;
}
