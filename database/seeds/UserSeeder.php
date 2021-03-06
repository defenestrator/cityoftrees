<?php

use Cot\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jeremy Anderson',
            'email' => 'jeremyblc@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('very very temporary'),
            'remember_token' => Str::random(10)
        ]);

        factory(User::class, 10)->create();
    }
}
