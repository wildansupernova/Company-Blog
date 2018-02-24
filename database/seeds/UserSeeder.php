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
        //
        $user = new \App\User;
        $user->name = "Sucipto";
        $user->email = "chip@gamais.com";
        $user->password = Hash::make("rahasiakitaberdua");
        $user->api_token = str_random(100);
        $user->privilege = "admin";
        $user->save();
    }
}
