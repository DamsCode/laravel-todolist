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
        factory(App\Users::class, 9)->create();
        factory(App\Lists::class, 9)->create();
        factory(App\Tasks::class, 9)->create();

    }
}
