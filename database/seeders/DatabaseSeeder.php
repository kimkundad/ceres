<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('roles')->insert([
            [
                'name' => 'superadmin',
                'description' => 'A SuperAdmin User'
            ],
            [
                'name' => 'admin',
                'description' => 'A admin User'
            ],
            [
                'name' => 'user',
                'description' => 'A customer User'
            ]
        ]);

        DB::table('role_user')->insert([
            [
                'role_id' => 1,
                'user_id' => 1
            ],
            [
                'role_id' => 2,
                'user_id' => 2
            ],
            [
                'role_id' => 1,
                'user_id' => 3
            ]
        ]);
        DB::table('users')->insert([
            [
              'name' => 'superadmin',
              'email' => 'admin@email.com',
              'username' => 'superadmin',
              'password' => bcrypt('qaz123456'),
              'code_user' => 'CV999999',
              'avatar' => '300-10.jpg',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'phone' => '0912345678',
              'is_admin' => 1,
              'shop_id' => 1
            ],
            [
              'name' => 'administrator',
              'email' => 'administrator@email.com',
              'username' => 'administrator',
              'password' => bcrypt('qaz123456'),
              'code_user' => 'CV111111',
              'avatar' => '300-11.jpg',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'phone' => '0812345678',
              'is_admin' => 1,
              'shop_id' => 1
            ],
            [
                'name' => 'kimkundad',
                'email' => 'kim.kundad@email.com',
                'username' => 'kimkundad',
                'password' => bcrypt('qaz123456'),
                'code_user' => 'UD000002',
                'avatar' => '300-23.jpg',
                'email_verified_at' => '2020-08-01 14:27:38',
                'provider' => 'email',
                'phone' => 'kimkundad',
                'is_admin' => 0,
                'shop_id' => 1
              ]
        ]);



    }
}
