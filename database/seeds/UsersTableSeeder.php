<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    if (User::count() == 0) {
            $data = [
                [
                    'name' => "Admin",
                    'slug' => "Admin",
                    'email' => "super@site.com",
                    'user_group_id' => "1",
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ],
                [
                    'name' => "Saqib",
                    'slug' => "Saqib",
                    'email' => "saqib@site.com",
                    'user_group_id' => "2",
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ],
                [
                    'name' => "Kashif",
                    'slug' => "Kashif",
                    'email' => "kashif@site.com",
                    'user_group_id' => "3",
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ],
            ];
            User::insert($data);
    	}else{
    		echo "*users* Table Already has Data\n";
    	}
    }
}
