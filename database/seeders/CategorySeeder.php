<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            'pakaian',
            'accesories',
            'laptop',
            'listrik',
            'rumah tangga',
        ]);

        $categories->each(function($categori){
            Category::create([
                'title' => $categori
            ]);
        });
    }
}
