<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@hotmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
