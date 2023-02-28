<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UsersProfile;

class UsersProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberUser = $this->command->ask('cuantos usuarios desea crear?');
        UsersProfile::factory()->count($numberUser)->create();
    }
}
