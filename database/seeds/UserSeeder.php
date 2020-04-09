<?php

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
        DB::table('users')->insert([
            [
                'name'       => "Admin",
                'email'      => "admin@email.com",
                'email_verified_at' => now(),
                'password'   => password_hash('password', PASSWORD_BCRYPT),
                'remember_token'    => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
