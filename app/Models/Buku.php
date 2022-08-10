<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table= 'buku';

    protected $fillable= [
        'judul','slug','kategori_id','user_id','gambar_artikel', 'is_active','views','body'
    ];

    protected $hidden =[];

}
