<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Shop::create([
            'name' => 'whey protein',
            'price' =>70,
           
            'image' => '/images/shop/wheyp.jpeg'
        ]);
       Shop::create([
            'name' => 'ankle straps',
            'price' => 8,
            
            'image' => '/images/shop/anklestraps.jpg'
        ]);
       Shop::create([
            'name' => 'creatine monohydrate',
            'price' => 24,
           
            'image' => '/images/shop/creatinemonohydrate.jpg'
        ]);
        
       Shop::create([
            'name' => 'knee straps',
            'price' => 8,
           
            'image' => '/images/shop/kneestraps.jpg'
        ]);
      Shop::create([
            'name' => 'l-carnitine',
            'price' =>23,
           
            'image' => '/images/shop/l-carnitine.jpg'
        ]);
        Shop::create([
            'name' => 'lifting belt',
            'price' => 20,
           
            'image' => '/images/shop/liftingbelt.jpg'
        ]);
       Shop::create([
            'name' => 'omega 3',
            'price' => 20,
           
            'image' => '/images/shop/omega3.jpg'
        ]);
       Shop::create([
            'name' => 'wrist straps',
            'price' => 10,
           
            'image' => '/images/shop/wriststraps.jpg'
        ]);
        Shop::create([
            'name' => 'Zinc',
            'price' => 39,
           
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCxoySBaMBoezWIc5yKscM3cXwi7XC2eyN8w&usqp=CAU'
        ]);

    }
}
