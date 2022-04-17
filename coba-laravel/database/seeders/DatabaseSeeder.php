<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Ahmad Faisal',
            'email' => 'ahmadfaisal2513@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Reza Zuliansah',
            'email' => 'rezazuliansah@gmmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, reprehenderit ipsam eos, sapiente perspiciatis maxime nisi id cupiditate architecto repellat necessitatibus a aliquid! Ex labore hic quae consectetur delectus, ea consequatur cupiditate itaque quasi dolore, incidunt totam voluptatum. Vero explicabo repellendus laborum dolorem exercitationem porro rerum, cupiditate voluptatibus. Corporis aliquam incidunt magnam dolorum. Quaerat nisi rem incidunt eligendi consequatur cupiditate beatae blanditiis inventore, dolorem ab et alias aliquam impedit odit pariatur! Nam, hic. Repellat inventore et repellendus quibusdam! Cumque ea consequuntur quas incidunt voluptatibus quo eius veniam labore adipisci a, delectus vitae, earum molestias velit cupiditate, minima eum totam explicabo reiciendis! Earum quidem suscipit est. Quo quam nulla placeat, amet illo fuga consectetur assumenda. Ipsam blanditiis nemo laboriosam eveniet fugit.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, reprehenderit ipsam eos, sapiente perspiciatis maxime nisi id cupiditate architecto repellat necessitatibus a aliquid! Ex labore hic quae consectetur delectus, ea consequatur cupiditate itaque quasi dolore, incidunt totam voluptatum. Vero explicabo repellendus laborum dolorem exercitationem porro rerum, cupiditate voluptatibus. Corporis aliquam incidunt magnam dolorum. Quaerat nisi rem incidunt eligendi consequatur cupiditate beatae blanditiis inventore, dolorem ab et alias aliquam impedit odit pariatur! Nam, hic. Repellat inventore et repellendus quibusdam! Cumque ea consequuntur quas incidunt voluptatibus quo eius veniam labore adipisci a, delectus vitae, earum molestias velit cupiditate, minima eum totam explicabo reiciendis! Earum quidem suscipit est. Quo quam nulla placeat, amet illo fuga consectetur assumenda. Ipsam blanditiis nemo laboriosam eveniet fugit.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, reprehenderit ipsam eos, sapiente perspiciatis maxime nisi id cupiditate architecto repellat necessitatibus a aliquid! Ex labore hic quae consectetur delectus, ea consequatur cupiditate itaque quasi dolore, incidunt totam voluptatum. Vero explicabo repellendus laborum dolorem exercitationem porro rerum, cupiditate voluptatibus. Corporis aliquam incidunt magnam dolorum. Quaerat nisi rem incidunt eligendi consequatur cupiditate beatae blanditiis inventore, dolorem ab et alias aliquam impedit odit pariatur! Nam, hic. Repellat inventore et repellendus quibusdam! Cumque ea consequuntur quas incidunt voluptatibus quo eius veniam labore adipisci a, delectus vitae, earum molestias velit cupiditate, minima eum totam explicabo reiciendis! Earum quidem suscipit est. Quo quam nulla placeat, amet illo fuga consectetur assumenda. Ipsam blanditiis nemo laboriosam eveniet fugit.',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, reprehenderit ipsam eos, sapiente perspiciatis maxime nisi id cupiditate architecto repellat necessitatibus a aliquid! Ex labore hic quae consectetur delectus, ea consequatur cupiditate itaque quasi dolore, incidunt totam voluptatum. Vero explicabo repellendus laborum dolorem exercitationem porro rerum, cupiditate voluptatibus. Corporis aliquam incidunt magnam dolorum. Quaerat nisi rem incidunt eligendi consequatur cupiditate beatae blanditiis inventore, dolorem ab et alias aliquam impedit odit pariatur! Nam, hic. Repellat inventore et repellendus quibusdam! Cumque ea consequuntur quas incidunt voluptatibus quo eius veniam labore adipisci a, delectus vitae, earum molestias velit cupiditate, minima eum totam explicabo reiciendis! Earum quidem suscipit est. Quo quam nulla placeat, amet illo fuga consectetur assumenda. Ipsam blanditiis nemo laboriosam eveniet fugit.',
            'category_id' => 2,
            'user_id' => 2,
        ]);

    }
}
