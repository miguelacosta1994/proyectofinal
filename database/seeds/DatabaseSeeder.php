<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        factory(\App\Product::class, 10)->create();
        factory(\App\Gallery::class, 10)->create();
        factory(\App\FooterText::class, 10)->create();
        factory(\App\Title::class, 10)->create();
    }
}
