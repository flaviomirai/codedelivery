<?php

use CodeDelivery\Models\Category;
use CodeDelivery\Models\Cupom;
use CodeDelivery\Models\Product;
use Illuminate\Database\Seeder;


class CupomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //each para cada categoria entra na funcao para criar 5 produtos
        factory(Cupom::class, 10)->create();

    }
}
