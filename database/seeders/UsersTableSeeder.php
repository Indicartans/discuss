<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('admin123'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Hanna Maghfiroh',
            'username'  => 'Hanna',
            'email'     => 'hanna@gmail.com',
            'password'  => bcrypt('hanna123'),
            'type'      => User::MODERATOR,
        ]);

        User::factory()->create([
            'name'      => 'Zultan Viky',
            'username'  => 'zultan',
            'email'     => 'zultan@gmail.com',
            'password'  => bcrypt('zultan123'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->count(10)->create();
    }
}
