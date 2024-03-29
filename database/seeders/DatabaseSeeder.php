<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['nisn/nip'=>'0044772182', 'name'=>'angga', 'password'=>bcrypt('12345')]);
        User::create(['nisn/nip'=>'0042266343', 'name'=>'fery', 'password'=>bcrypt('12345')]);
    }
}
