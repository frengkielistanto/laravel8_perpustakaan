<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'admin',
            'email' => 'frengki123elistantobi1@gmail.com',
            'password' => bcrypt('tria1234'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'email' => 'dindaelistanti102@gmail.com',
            'password' => bcrypt('tria1234'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'peminjam',
            'email' => 'frengki1234elistantobi1@gmail.com',
            'password' => bcrypt('tria1234'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

    }
}
