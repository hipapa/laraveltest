<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Work_historiesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(Study_historiesTableSeeder::class);
    }
}
