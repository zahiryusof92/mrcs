<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::truncate();
        
        User::factory()->create([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@mrcs.com',
            'password' => Hash::make('P@ssw0rd1234'),
        ]);
    }

}
