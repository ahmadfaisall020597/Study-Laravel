<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','category_id','slug','excerpt','body']; // memberikan izin pemasukan data sekaligus langsung semua, file ada di Note.

    protected $guarded =['id']; // semua bisa berubah kecuali id, karna ada guard.

    public function category()
    {
        return $this->belongsTo(Category::class); // 1 Postingan mempunyai 1 category
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
