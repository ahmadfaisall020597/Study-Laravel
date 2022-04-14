<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','category_id','slug','excerpt','body']; // memberikan izin pemasukan data sekaligus langsung semua, file ada di Note.

    protected $guarded =['id']; // semua bisa berubah kecuali id, karna ada guard.
}
