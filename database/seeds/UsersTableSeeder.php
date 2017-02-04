<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User;
        $admin->name = 'Administrator';
        $admin->email = 'info@california.com';
        $admin->password = Hash::make('admin');
        $admin->save();
    }
}
