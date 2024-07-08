<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> 'test123',
        ]);
        Slider ::factory()->create([
            'title' =>'test title',
            'small_title'=>'small title',
            'description'=>'description',
            'bg_url'=>'https:www.rgwrgwrgwrgwr.com',
            'link_url'=>'erwrgwrgwrgr',
        ]);

    }
}
