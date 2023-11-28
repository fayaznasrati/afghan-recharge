<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // run this command to seed the database
       //php artisan db:seed --class=CreateUsersSeeder
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin.nasraty@gmail.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('123456789'),
             ],
             [
                'name'=>'Admin',
                'email'=>'fayaz.nasraty@gmail.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('123456789'),
             ],
            [
               'name'=>'User',
               'email'=>'user.nasraty@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456789'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
