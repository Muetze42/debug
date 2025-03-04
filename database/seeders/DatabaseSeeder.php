<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(999)->create();
        Category::factory(10_000)->create();
        Post::factory()
            ->count(100_000)
            ->state(new Sequence(
                fn (Sequence $sequence) => ['category_id' => mt_rand(1, 10_000)],
            ))
            ->create();
    }
}
