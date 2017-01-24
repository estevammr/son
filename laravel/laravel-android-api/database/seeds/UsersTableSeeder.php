<?php

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
        factory(\LaravelAndroid\Models\User::class, 1)->create([
        		'email' => 'admin@gmail.com'
        ]);
        factory(\LaravelAndroid\Models\User::class, 20)->create();
    }
}
