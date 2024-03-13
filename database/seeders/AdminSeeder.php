<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();

        $admin->image = '/test';
        $admin->name = 'Super User';
        $admin->email = 'admin@gmail.com';
        $admin->password = static::$password ??= Hash::make('password');
        $admin->status = 1;
        $admin->save();

    }
}
