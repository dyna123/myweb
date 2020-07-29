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
        $users = [];
        $faker = Faker\Factory::create();
        for($i=0;$i<5;$i++){
        $users[$i] = [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'roles' => json_encode(['CUSTOMER']),
        'avatar' => 'unavailable.jpg',
        'status' => 'ACTIVE',
        'created_at' => Carbon\Carbon::now(),
        ];
        }
        DB::table('users')->insert($users);
    }
}
