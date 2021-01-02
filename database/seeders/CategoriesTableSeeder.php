<?php

namespace Database\Seeders;
use\Carbon\Carbon;
use\App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//some categories
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
            ['name'=>'Pizza','slug'=>'pizza','created_at'=>$now,'updated_at'=>$now ],
            ['name'=>'Tacos','slug'=>'tacos','created_at'=>$now,'updated_at'=>$now ],
            ['name'=>'Grills','slug'=>'grills','created_at'=>$now,'updated_at'=>$now ],
            ['name'=>'Tardutional Food','slug'=>'tradutional-food','created_at'=>$now,'updated_at'=>$now ],
            ['name'=>'Humberger','slug'=>'humberger','created_at'=>$now,'updated_at'=>$now ],
            ['name'=>'Drinks','slug'=>'drinks','created_at'=>$now,'updated_at'=>$now ],
        ]);
    }
}
