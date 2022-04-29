<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title','category_id','slug','excerpt','body']; // memberikan izin pemasukan data sekaligus langsung semua, file ada di Note.

    protected $guarded =['id']; // semua bisa berubah kecuali id, karna ada guard.

    protected $with = ['category','author']; // untuk di panggil di PostController jadi langsung menggunakan Latest

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false)
        // {
        //    return $query->where('title','like','%' . $filters['search'] . '%')
        //           ->orWhere('body','like','%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search)
        {
            return $query->where('title','like','%' . $search . '%')
                         ->orWhere('body','like','%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category)
        {
            return $query->whereHas('category', function($query) use ($category)
            {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('author', fn($query) =>
        $query->where('username', $author))
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class); // 1 Postingan mempunyai 1 category
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id'); // mengganti user_id alias author, memanggil user_id tetap parameter author
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }
}
