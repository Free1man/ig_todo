<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'aaa',
            'email' => 'aaa@aaa.com',
            'password' => bcrypt('aaaaaaaa'),
        ]);
    }
}
