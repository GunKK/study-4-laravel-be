<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            User::insert([
                [
                    'email'  =>'admin@hcmut.edu.vn',
                    'name' => 'admin',
                    'password' =>  Hash::make('admin12345678'),
                    'email_verified_at' => now()->toDateTimeString(),
                    'role' => 1,
                    'avatar' => 'https://gravatar.com/avatar/d36a92237c75c5337c17b60d90686bf9?size=200'
                ],
                [
                    'email'  =>'supervisor@hcmut.edu.vn',
                    'name' => 'Hau supervisor',
                    'password' =>  Hash::make('supervisor12345678'),
                    'email_verified_at' => now()->toDateTimeString(),
                    'role' => 2,
                    'avatar' => 'https://gravatar.com/avatar/d36a92237c75c5337c17b60d90686bf9?size=200'
                ],
                [
                    'email'  =>'employee@hcmut.edu.vn',
                    'name' => 'Hau employee',
                    'password' =>  Hash::make('employee12345678'),
                    'email_verified_at' => now()->toDateTimeString(),
                    'role' => 3,
                    'avatar' => 'https://gravatar.com/avatar/d36a92237c75c5337c17b60d90686bf9?size=200'
                ],
                [
                    'email'  =>'hau.nguyenbk19@hcmut.edu.vn',
                    'name' => 'Hau customer',
                    'password' =>  Hash::make('hau.nguyenbk19'),
                    'email_verified_at' => now()->toDateTimeString(),
                    'role' => 4,
                    'avatar' => 'https://gravatar.com/avatar/d36a92237c75c5337c17b60d90686bf9?size=200'
                ],
            ]);

    }
}
