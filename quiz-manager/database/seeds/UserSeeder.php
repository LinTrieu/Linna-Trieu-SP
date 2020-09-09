<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    const NUMBER_OF_USERS = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count()) {
            echo "Skipping User; data already exists\n";
            return;
        }

        factory(User::class, self::NUMBER_OF_USERS)->create();
    }
}
