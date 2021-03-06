<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ForumCategorySeeder::class);
        $this->call(ForumSubcategorySeeder::class);
        $this->call(ForumPostSeeder::class);
        $this->call(ForumCommentSeeder::class);
        $this->call(PackSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(CategoryItemSeeder::class);
    }
}
