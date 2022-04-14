<?php

namespace App\Models;


// hanya untuk bisa di akses untuk kelas ini saja maka menggunakan private static
class Post
{
    // blognya bisa kita ambil dari database / API
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Faisal",
            "body" => "Apa itu Laravel Anda pasti tahu bahasa pemrograman PHP? Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website. PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis versi terbaru, Laravel  selalu memunculkan teknologi baru di antara framework PHP lainnya."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rara Ayu",
            "body" => "Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia. "
        ]
        ];

        public static function all() // kita bisa mendapatkan semua hasil datanya
        {
            // untuk properti biasa dapat memakai
            // return $this->blog_post;
            // return self untuk properti static
            // return self::$blog_posts; // untuk biasa
            return collect(self::$blog_posts); // untuk collection bisa di panggil secara bnyak atau berskala
        }

        // jika ingin 1 seperti contoh di bawah, kita ambil datanya baru kita looping
        public static function find($slug) // parameter
        {
            $posts = static::all(); // untuk pemanggilan collect parameter all
            //$posts = self::$blog_posts; // Ambil semua Postnya
        //     $post = []; // array / postingan yg ketemu
        // foreach($posts as $p) // kita looping 1 per 1 di presentasikan sebagai $p
        // {
        //     if ($p["slug"] === $slug) // jika $slug nya itu sama dengan $slug yg di kirim ke parameter
        //     {
        //         $post = $p; // maka masukan postingan tersebut kedapan variabel $post
        //     }
        // }

        // return $post; // jika ketemu kembalikan hasilnya

        // source menggantikan dari banyak baris di atas
        return $posts->firstWhere('slug',$slug); // ambil semua $posts yang bentuknya collection lalu cari yang pertama di temukan yang dimana slugnya sama dengan $slug
    }
}
