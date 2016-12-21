<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Administrador', 'email' => 'admin@resertec.com.pe', 'password' => bcrypt('admin')]);
    }
}
