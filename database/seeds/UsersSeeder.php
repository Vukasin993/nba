<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'dsfafa',
            'email' => 'asdkfjsakdfjskfs',
            'password' => bcrypt('password'),
        ]);

        factory(User::class, 100)->create();
        
    }
}
