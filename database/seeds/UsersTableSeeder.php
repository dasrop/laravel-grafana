<?php

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
        factory(User::class)->create([
            'email' => 'admin@email.com',
            'password' => bcrypt('admin')
        ]);

        factory(User::class)->create([
            'email' => 'user@email.com',
            'password' => bcrypt('user')
        ]);
    }
}
