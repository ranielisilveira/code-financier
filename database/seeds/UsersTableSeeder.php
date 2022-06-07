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
        factory(CodeFinancier\User::class, 1)
            ->states('admin')->create([
                'name' => 'Ranieli',
                'email' => 'admin@user.com'
            ]);

        factory(CodeFinancier\User::class, 1)
            ->create([
                'name' => 'Cliente',
                'email' => 'cliente@user.com'
            ]);
    }
}
