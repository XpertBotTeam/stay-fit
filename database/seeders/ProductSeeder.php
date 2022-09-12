<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      
            Product::create([
                'name' => 'chicken breast',
                'price' =>10,
               
                'image' => '/images/mealsanddessert/chickenbreast.jpg'
            ]);
            Product::create([
                'name' => 'tuna salade',
                'price' => 7,
                
                'image' => '/images/mealsanddessert/tunasalade.jpg'
            ]);
            Product::create([
                'name' => 'bibingka(3pcs)',
                'price' => 4,
               
                'image' => '/images/mealsanddessert/bibingka.jpg'
            ]);
            
            Product::create([
                'name' => 'cherry clafoutis',
                'price' => 5,
               
                'image' => '/images/mealsanddessert/cherryclafoutis.jpg'
            ]);
            Product::create([
                'name' => 'cookies(5pcs)',
                'price' =>8,
               
                'image' => '/images/mealsanddessert/cookies.jpg'
            ]);
            Product::create([
                'name' => 'carrotcake(glutenfree)',
                'price' => 15,
               
                'image' => '/images/mealsanddessert/gluten-free-carrot-cake.jpg'
            ]);
            Product::create([
                'name' => 'pasta meal',
                'price' => 9,
               
                'image' => '/images/mealsanddessert/pasta.jpg'
            ]);
            Product::create([
                'name' => 'pumkinbuttercrunch',
                'price' => 5,
               
                'image' => '/images/mealsanddessert/pumpkin-buttercrunch.jpg'
            ]);
            Product::create([
                'name' => 'strawberrypretzelpie',
                'price' => 7,
               
                'image' => '/images/mealsanddessert/strawberry-pretzel-pie.jpg'
            ]);
    
    }
}
