<?php

use CodeDelivery\Models\Client;
use Illuminate\Database\Seeder;
use CodeDelivery\Models\User;

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
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ])->clients()->save(factory(Client::class)->make());




         factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@user.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
            'remember_token' => str_random(10),
        ])->clients()->save(factory(Client::class)->make());


        factory(User::class)->create([
            'name' => 'Entregador',
            'email' => 'entregador@user.com',
            'password' => bcrypt('123456'),
            'role' => 'deliveryman',
            'remember_token' => str_random(10),
        ])->clients()->save(factory(Client::class)->make());

        factory(User::class,3)->create([
            'role' => 'deliveryman'
        ]);





        //each para cada usuario entra na funcao para criar 1 client
        factory(User::class, 10)->create()->each(function($c) {
                $c->clients()->save(factory(Client::class)->make());
        });


    }
}
