<p>Cara Membuat Dummy Text Lorem Ipsum. Bagi kalian yang terjun ke dunia desain seperti web desain dan desain grafis yang berhubungan dengan User Interface (UI) tentunya kalian pasti sudah tidak asing lagi dengan kalimat Lorem Ipsum.</p><p>Lantas apa itu arti dari kalimat tersebut? Lorem Ipsum merupakan kumpulan kalimat yang tidak memiliki makna alias disebut dengan Dummy Text, hal ini bertujuan agar si desainer tidak terlalu pusing dalam menentukan makna tulisan yang terkandung dalam desain dan lebih fokus untuk mempresentasikan visual pada tampilan font, tata letak, tipografi pada desain tersebut.</p><p>Biasanya kalimat Lorem Ipsum digunakan di berbagai macam desain, seperti pada widget blog, template blog, brosur, banner, logo, kartu nama dan masih banyak lagi.</p>

Post::create([
    'title' => 'Judul Pertama',
    'category_id' => 1,
    'slug' => 'judul-Pertama',
    'excerpt' => 'Lorem ipsum Pertama',
    'body' => '<p>Cara Membuat Dummy Text Lorem Ipsum. Bagi kalian yang terjun ke dunia desain seperti web desain dan desain grafis yang berhubungan dengan User Interface (UI) tentunya kalian pasti sudah tidak asing lagi dengan kalimat Lorem Ipsum.</p><p>Lantas apa itu arti dari kalimat tersebut? Lorem Ipsum merupakan kumpulan kalimat yang tidak memiliki makna alias disebut dengan Dummy Text, hal ini bertujuan agar si desainer tidak terlalu pusing dalam menentukan makna tulisan yang terkandung dalam desain dan lebih fokus untuk mempresentasikan visual pada tampilan font, tata letak, tipografi pada desain tersebut.</p><p>Biasanya kalimat Lorem Ipsum digunakan di berbagai macam desain, seperti pada widget blog, template blog, brosur, banner, logo, kartu nama dan masih banyak lagi.</p>'])


Category::create([
    'name' => 'Personal',
    'slug' => 'personal'
    ])

Post::create([
    'title' => 'Judul Tiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum ketiga',
    'body' => '<p>Cara Membuat Dummy Text Lorem Ipsum. Bagi kalian yang terjun ke dunia desain seperti web desain dan desain grafis yang berhubungan dengan User Interface (UI) tentunya kalian pasti sudah tidak asing lagi dengan kalimat Lorem Ipsum.</p><p>Lantas apa itu arti dari kalimat tersebut? Lorem Ipsum merupakan kumpulan kalimat yang tidak memiliki makna alias disebut dengan Dummy Text, hal ini bertujuan agar si desainer tidak terlalu pusing dalam menentukan makna tulisan yang terkandung dalam desain dan lebih fokus untuk mempresentasikan visual pada tampilan font, tata letak, tipografi pada desain tersebut.</p><p>Biasanya kalimat Lorem Ipsum digunakan di berbagai macam desain, seperti pada widget blog, template blog, brosur, banner, logo, kartu nama dan masih banyak lagi.</p>'])


    // untuk menghilangkan garis bawah:
    class="text-decoration-none"

    class="mb-5" = untuk margin bottom membuat enter atau spacing tulisan
    class="border-bottom" = membuat garis bawah di setelah paragraf


    // migrasi ulang include inputan database:
    php artisan migrate:fresh --seed


    // untuk membuat factory di terminal :
    php artisan make:factory Nama_factory
    jika untuk membuat langsung tambahkan -mfs dibelakang Nama_factory
    m = untuk migrate
    f = untuk factory
    s = seeder

    // diffForHumans() = perbedaan waktu yang sekarang agar mudah terbaca oleh manusia jika tidak memakai fungsi tersebut tanggal berbentuk acak
    contoh penulisan ada di posts.blade.php line 18
