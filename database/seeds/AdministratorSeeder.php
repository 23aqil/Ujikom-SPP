<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "haikalhaq";
        $administrator->name = "Muhammad Haikal Haq";
        $administrator->level = json_encode(["ADMIN"]);
        $administrator->email = "23aqil@gmail.com";
        $administrator->password = Hash::make('12345678');

        $administrator->save();

        $this->command->info("User Admin berhasil di insert");
    }
}
