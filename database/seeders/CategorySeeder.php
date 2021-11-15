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
        Category::create([
            'name' => 'Elektronik',
            'seq' => '1'
        ]);
        Category::create([
            'parent_id' => 1,
            'name' => 'Akıllı Telefon',
            'seq' => '2'
        ]);
    }
}
