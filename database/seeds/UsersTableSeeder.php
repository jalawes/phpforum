<?php

use App\User;
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
        User::create([
            'name' => 'Demo',
            'email' => 'demo@demo.com',
            'password' => bcrypt('demo')
        ]);

        factory(User::class, 20)->create();
    }
}
