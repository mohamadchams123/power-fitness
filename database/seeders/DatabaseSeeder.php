<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Mohamad Chamseddine',
            'username' => 'chamseddine',
            'email' => 'mohamadchams123@gmail.com',
            'password' => bcrypt('chamsmoudi123'),
        ]);
        Comment::factory()->create([
            'user_id' => $user->id,
            'body' => 'This gym is awesome'
        ]);
    }
}
