<?php

use Illuminate\Database\Seeder;

use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'pias@admin.com',
            // 'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'postion' => 'Advisor',
            // 'admin' => 1,
            // 'approved_at' => now(),
        ]);
    }
}
