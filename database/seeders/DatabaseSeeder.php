<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Julianto',
            'email' => 'julianto007@binus.ac.id',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Michael',
            'email' => 'michael01@binus.ac.id',
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
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla rerum, nostrum quam consectetur exercitationem vitae! Architecto iure hic, laboriosam blanditiis laborum repellendus nisi aliquid quae reiciendis incidunt saepe corrupti aut fugiat debitis aspernatur harum soluta? Dolor minus nostrum natus aliquid sapiente illum! Ea ratione voluptate maiores, vel, assumenda dolorem repudiandae repellat sed perspiciatis eius, laboriosam sequi commodi sunt reiciendis atque natus excepturi. Officia, nobis soluta, accusantium, esse vitae placeat molestiae exercitationem ratione iusto fugit dolores laboriosam. Iste eaque dolores, minima et amet recusandae? Tempora consectetur libero itaque corrupti impedit, error nisi quas, quod doloribus praesentium quasi perspiciatis perferendis repellat reiciendis.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla rerum, nostrum quam consectetur exercitationem vitae! Architecto iure hic, laboriosam blanditiis laborum repellendus nisi aliquid quae reiciendis incidunt saepe corrupti aut fugiat debitis aspernatur harum soluta? Dolor minus nostrum natus aliquid sapiente illum! Ea ratione voluptate maiores, vel, assumenda dolorem repudiandae repellat sed perspiciatis eius, laboriosam sequi commodi sunt reiciendis atque natus excepturi. Officia, nobis soluta, accusantium, esse vitae placeat molestiae exercitationem ratione iusto fugit dolores laboriosam. Iste eaque dolores, minima et amet recusandae? Tempora consectetur libero itaque corrupti impedit, error nisi quas, quod doloribus praesentium quasi perspiciatis perferendis repellat reiciendis.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla rerum, nostrum quam consectetur exercitationem vitae! Architecto iure hic, laboriosam blanditiis laborum repellendus nisi aliquid quae reiciendis incidunt saepe corrupti aut fugiat debitis aspernatur harum soluta? Dolor minus nostrum natus aliquid sapiente illum! Ea ratione voluptate maiores, vel, assumenda dolorem repudiandae repellat sed perspiciatis eius, laboriosam sequi commodi sunt reiciendis atque natus excepturi. Officia, nobis soluta, accusantium, esse vitae placeat molestiae exercitationem ratione iusto fugit dolores laboriosam. Iste eaque dolores, minima et amet recusandae? Tempora consectetur libero itaque corrupti impedit, error nisi quas, quod doloribus praesentium quasi perspiciatis perferendis repellat reiciendis.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla rerum, nostrum quam consectetur exercitationem vitae! Architecto iure hic, laboriosam blanditiis laborum repellendus nisi aliquid quae reiciendis incidunt saepe corrupti aut fugiat debitis aspernatur harum soluta? Dolor minus nostrum natus aliquid sapiente illum! Ea ratione voluptate maiores, vel, assumenda dolorem repudiandae repellat sed perspiciatis eius, laboriosam sequi commodi sunt reiciendis atque natus excepturi. Officia, nobis soluta, accusantium, esse vitae placeat molestiae exercitationem ratione iusto fugit dolores laboriosam. Iste eaque dolores, minima et amet recusandae? Tempora consectetur libero itaque corrupti impedit, error nisi quas, quod doloribus praesentium quasi perspiciatis perferendis repellat reiciendis.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
