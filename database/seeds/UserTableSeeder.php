<?php

use EloquentORM\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class)->create([
    		'name' => 'Santoshm',
    		'gender' => 'm'
    	]);

        factory(User::class, 9)->create();
    }
}
