<?php

use Illuminate\Database\Seeder;
use App\User;

/**
 * Description of UsersTableSeeder
 *
 * @author Gary Romero
 */

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'email' => 'admin@test.com',
                'username' => 'admin',
                'name' => 'Administrador',
                'password' => bcrypt('admin000'),
            ]);

    }
}
