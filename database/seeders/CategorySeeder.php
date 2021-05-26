<?php

namespace Database\Seeders;

use App\Models\Categoy;
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
            'rumah tangga'
        ]);

        $categories->each(function($categori){
            Categoy::created($categori);
        });
    }
}
