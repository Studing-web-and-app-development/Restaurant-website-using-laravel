<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Pizza
       for ($i=1; $i <10 ; $i++) { 
        Product::create([
            'title'=>'Pizza'. $i,
            'slug'=>'pizza'. $i,
            'subtitle'=>'pizza',
            'description'=>'Great way to make your business appear trust and relevant.',
            'price'=>rand(220, 300),
            'image'=>'https://via.placeholder.com/150×150'
        ])->categories()->attach(1);//the category of this meals is the category number 1 in categories seeder
    }

    //Tocos
    for ($i=1; $i <10 ; $i++) { 
        Product::create([
            'title'=>'Tacos'.$i,
            'slug'=>'tcos'.$i,
            'subtitle'=>'tacos',
            'description'=>'Great way to make your business appear trust and relevant.',
            'price'=>rand(290,300),
            'image'=>'https://via.placeholder.com/150×150'
        ])->categories()->attach(2);//the category of this meals is the category number 2 in categories seeder
    }
    //Grills
    for ($i=1; $i <10 ; $i++) { 
        Product::create([
            'title'=>'Grills'.$i,
            'slug'=>'grills'.$i,
            'subtitle'=>'grills',
            'description'=>'Great way to make your business appear trust and relevant.',
            'price'=>rand(290,300),
            'image'=>'https://via.placeholder.com/150×150'
        ])->categories()->attach(3);//the category of this meals is the category number 3 in categories seeder
    }
    //Tadutional Food
    for ($i=1; $i <10 ; $i++) { 
        Product::create([
            'title'=>'Tradutional Food'.$i,
            'slug'=>'tradutional-food'.$i,
            'subtitle'=>'tradutional food',
            'description'=>'Great way to make your business appear trust and relevant.',
            'price'=>rand(290,300),
            'image'=>'https://via.placeholder.com/150×150'
        ])->categories()->attach(4);//the category of this meals is the category number 4 in categories seeder
    }
    //Hamburger 
    for ($i=1; $i <10 ; $i++) { 
        Product::create([
            'title'=>'Humberger'.$i,
            'slug'=>'humberger'.$i,
            'subtitle'=>'humberger',
            'description'=>'Great way to make your business appear trust and relevant.',
            'price'=>rand(290,300),
            'image'=>'https://via.placeholder.com/150×150'
        ])->categories()->attach(5);//the category of this meals is the category number 5 in categories seeder
    }
    //Drinks
    for ($i=1; $i <10 ; $i++) { 
        Product::create([
            'title'=>'Drinks'.$i,
            'slug'=>'drinks'.$i,
            'subtitle'=>'drinks',
            'description'=>'Great way to make your business appear trust and relevant.',
            'price'=>rand(290,300),
            'image'=>'https://via.placeholder.com/150×150'
        ])->categories()->attach(6);//the category of this meals is the category number 6 in categories seeder
    }

    }
}