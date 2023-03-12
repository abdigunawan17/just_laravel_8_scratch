<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(3)->create();

        User::create([
             'name' => 'Mukidi',
             'email' => 'tes@mail.com',
             'password' => bcrypt('pass1'),
             'email_verified_at' => Carbon::now()
         ]);
    }
}
