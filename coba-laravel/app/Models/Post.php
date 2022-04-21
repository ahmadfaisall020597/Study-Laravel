<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','category_id','slug','excerpt','body']; // memberikan izin pemasukan data sekaligus langsung semua, file ada di Note.

    protected $guarded =['id']; // semua bisa berubah kecuali id, karna ada guard.

    protected $with = ['category','author']; // untuk di panggil di PostController jadi langsung menggunakan Latest

    public function category()
    {
        return $this->belongsTo(Category::class); // 1 Postingan mempunyai 1 category
    }

public function author()
    {
        return $this->belongsTo(User::class,'user_id'); // mengganti user_id alias author, memanggil user_id tetap parameter author
    }
}
