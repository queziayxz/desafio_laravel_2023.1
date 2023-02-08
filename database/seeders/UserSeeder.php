<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        User::factory()->count(7)->state(new Sequence(
            ['work_time' => 'Manhã'],
            ['work_time' => 'Tarde'],
            ['work_time' => 'Noite'],
        ))->create();
    }
}
