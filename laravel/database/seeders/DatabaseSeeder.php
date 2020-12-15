<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'Л.Н. Толстой',
            'email' => 'tolstoy@gmail.com',
            'password' => bcrypt('tolstoy'),
        ]);
    }
}
