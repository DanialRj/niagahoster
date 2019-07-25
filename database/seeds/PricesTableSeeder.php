<?php

use Illuminate\Database\Seeder;
use App\Models\PriceModel;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price1 = new PriceModel;
        $price1->name = 'Bayi';
        $price1->basic_price = 19000;
        $price1->price_after_discount = 14900;
        $price1->save();

        $price2 = new PriceModel;
        $price2->name = 'Pelajar';
        $price2->basic_price = 46900;
        $price2->price_after_discount = 23900;
        $price2->save();
        
        $price3 = new PriceModel;
        $price3->name = 'Personal';
        $price3->basic_price = 58900;
        $price3->price_after_discount = 38900;
        $price3->save();

        $price4 = new PriceModel;
        $price4->name = 'Bisnis';
        $price4->basic_price = 109000;
        $price4->price_after_discount = 65900;
        $price4->save();
    }
}
