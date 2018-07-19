<?php

use Illuminate\Database\Seeder;

class FaqCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Categoria Exemplo',],

        ];

        foreach ($items as $item) {
            \App\FaqCategory::create($item);
        }
    }
}
