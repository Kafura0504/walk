<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'penulis',
        'kategori',
        'sinopsis',
        'cover',
        'terbit'
    ];

    public function kategori(){
        return $this->belongsTo(Katergori::class);
    }
}
