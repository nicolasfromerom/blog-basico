<?php

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
        App\User::create([
            'name' => 'Nicolas Romero',
            'email'=> 'romero.nicolasone@gmail.com',
            'password'=>bcrypt('123456')
        ]);

        factory(App\Post::class,24)->create();
    }
}
