<?php

use App\Category;
use Illuminate\Support\Str;
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
            'name' => 'Restaurant',
            'slug'=> Str::slug('Restaurant')
        ]);
        Category::create([
            'name' => 'Hospital',
            'slug'=> Str::slug('Hospital')
        ]);
        Category::create([
            'name' => 'Hotel',
            'slug'=> Str::slug('Hotel')
        ]);
        Category::create([
            'name' => 'Bar',
            'slug'=> Str::slug('Bar')
        ]);
        Category::create([
            'name' => 'Cafeterías',
            'slug'=> Str::slug('Cafeterías')
        ]);
        Category::create([
            'name' => 'Zapatería',
            'slug'=> Str::slug('Zapatería')
        ]);
        Category::create([
            'name' => 'Heladería',
            'slug'=> Str::slug('Heladería')
        ]);
        Category::create([
            'name' => 'Gym',
            'slug'=> Str::slug('Gym')
        ]);
        Category::create([
            'name' => 'Pizzería',
            'slug'=> Str::slug('Pizzería')
        ]);
        Category::create([
            'name' => 'Licorera',
            'slug'=> Str::slug('Licorera')
        ]);
    }
}
