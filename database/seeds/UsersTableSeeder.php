<?php

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
        $usr = new \App\User;
        $usr->name = 'Administrator';
        $usr->email = 'admin@admin.com';
        $usr->is_admin = '1';
        $usr->password = bcrypt('12345678');
        $usr->created_at = new DateTime();
        $usr->updated_at = new DateTime();
        $usr->save();

    }
}
