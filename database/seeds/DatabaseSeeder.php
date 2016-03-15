<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        //factory(CodeDelivery\Models\Category::class, 10)->create();
        $this->call(OrderTableSeeder::class);
        $this->call(CupomTableSeeder::class);


        Model::reguard();
    }
}
